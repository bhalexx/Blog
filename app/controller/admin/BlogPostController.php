<?php

	namespace App\Controller\Admin;

	use App\Controller\AppController;
	use App\Entity\BlogPostEntity;
	use Core\Helper\FileUploadHelper;
	use Core\Helper\FormValidatorHelper;

	class BlogPostController extends AppController {
		public function __construct() {
			parent::__construct();	
			$this->loadModel('blogpost');
		}

		/*
		 * Returns blogposts list
		 */
		public function index() {
			$allBlogPosts = $this->blogpost->getAll();
			
			$this->render('admin/blogpost.twig.html', ['posts' => $allBlogPosts, 'count' => count($allBlogPosts), 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Adds a new blogpost
		 */
		public function add() {
			//Get tags list			
			$this->loadModel('tag');
			$tags = $this->tag->getAll();

			//Posted form
			if (!empty($_POST)) {
				//Form validation			
				$validator = new FormValidatorHelper($_POST, $this->session->getToken());
				$formIsValid = $validator->checkForm();
				
				if (!$formIsValid) {
					$this->session->setFlash($validator->getFirstError(), 'error');
				} else {
					//Upload file
					$file = new FileUploadHelper($_FILES['picture'], $this->pictureRepository, $this->allowedExtensions);
					$upload = $file->upload();
					if (!$upload) {
						$this->session->setFlash($file->error, 'error');
						return $this->render('admin/blogpost.add.twig.html', ['tags' => $tags, 'data' => $_POST, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
					}
					$fileName = $file->fileName;

					//Set blogpost
					$post = new BlogPostEntity($validator->getSecuredPost());
					$post->setMainPicture($fileName);
					$post->setVisible(isset($_POST['visible']));
					$post->setcommentsEnabled(isset($_POST['commentsEnabled']));
					//Set blogpost's tags
					foreach($_POST['tags'] as $selectedTag) {
						$tag = $this->tag->getSingle($selectedTag);
						$post->addTag($tag);
					}
					
					//Insert blogpost in database
					$result = $this->blogpost->create([
						'title' => $post->getTitle(),
						'hook' => $post->getHook(),
						'content' => $post->getContent(),
						'author' => $post->getAuthor(),
						'mainPicture' => $post->getMainPicture(),
						'visible' => $post->getVisible(),
						'commentsEnabled' => $post->getCommentsEnabled()
					]);

					if ($result) {
						// Get new blogpost's id
						$blogPostId = $this->blogpost->getLastInsertId();
						//Insert blogpost's tags references
						$this->addTags($post->getTags(), $blogPostId);

						$this->session->setFlash('Votre article a bien été créé.', 'success');
						return $this->redirect('admin/posts');
					}
				}
			}
			
			$this->render('admin/blogpost.add.twig.html', ['tags' => $tags, 'data' => $_POST, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Edits a blogpost by id
		 */
		public function edit($id) {
			//Get blogpost's data value
			$post = $this->blogpost->getSingle($id);
						
			//Get blogpost's tags
			$this->loadModel('tag');		
			$selectedTags = $this->tag->getAllFromBlogPost($id);
			//Set selected tags to blogpost
			foreach($selectedTags as $selectedTag) {
				$post->addTag($selectedTag);
			}
			//Get all tags list
			$tags = $this->tag->getAll();
			//Build tags list by comparing full tags list with blogpost's selected tags
			$tagsList = [];
			foreach ($tags as $tag) {
				$newTag = $tag;
				$newTag->selected = in_array($tag, $selectedTags);
				
				$tagsList[] = $newTag;
			}

			//Comments
			$this->loadModel('comment');
			$comments = $this->comment->getAllFromBlogPost($id);
			
			//Posted form
			if (!empty($_POST)) {
				//Reset blogpost's tags
				$post->resetTags();

				//Form validation
				$validator = new FormValidatorHelper($_POST, $this->session->getToken());
				$formIsValid = $validator->checkForm();

				if (!$formIsValid) {
					$this->session->setFlash($validator->getFirstError(), 'error');
				} else {
					//If picture has changed, upload new file
					$pictureHasChanged = !$this->pictureIsMissing();
					if ($pictureHasChanged) {
						$file = new FileUploadHelper($_FILES['picture'], $this->pictureRepository, $this->allowedExtensions);
						$upload = $file->upload();
						if (!$upload) {
							$this->session->setFlash($file->error, 'error');
							return $this->render('admin/blogpost.edit.twig.html', ['post' => $post, 'tags' => $tagsList, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
						}
						//Delete old picture
						$file->delete($post->getMainPicture());
						//Set blogpost's main picture
						$post->setMainPicture($file->fileName);
					}

					//Set blogpost
					foreach($validator->getSecuredPost() as $key => $value) {
						$funcName = "set".ucfirst($key);
						if (method_exists($post, $funcName)) {
							$post->$funcName($value);							
						}
					}
					$post->setVisible(isset($_POST['visible']));
					$post->setcommentsEnabled(isset($_POST['commentsEnabled']));
					//Set blogpost's tags
					foreach($_POST['tags'] as $selectedTag) {
						$tag = $this->tag->getSingle($selectedTag);
						$post->addTag($tag);
					}
					
					//Update blogpost in database
					$result = $this->blogpost->update($id, [
						'title' => $post->getTitle(),
						'hook' => $post->getHook(),
						'content' => $post->getContent(),
						'author' => $post->getAuthor(),
						'mainPicture' => $post->getMainPicture(),
						'visible' => $post->getVisible(),
						'commentsEnabled' => $post->getCommentsEnabled() 
					]);

					if ($result) {
						//Delete all blogpost's tags references
						$this->tag->deleteAllFromBlogPost($id);
						//Insert blogpost's new tags references
						$this->addTags($post->getTags(), $id);

						$this->session->setFlash('Votre article a bien été modifié.', 'success');
						return $this->redirect('admin/posts');
					}
				}
			}

			$this->render('admin/blogpost.edit.twig.html', ['post' => $post, 'tags' => $tagsList, 'comments' => $comments, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Deletes a blogpost
		 */
		public function delete() {
			if (!empty($_POST)) {
				//Form validation
				$validator = new FormValidatorHelper($_POST, $this->session->getToken());
				$formIsValid = $validator->checkForm();

				if (!$formIsValid) {
					$this->session->setFlash($validator->getFirstError(), 'error');
					return $this->redirect('admin/posts');					
				}

				//Remove blogpost's picture file
				$file = $this->blogpost->getMainPicture($_POST['id']);
				$fileHelper = new FileUploadHelper($file->getMainPicture(), $this->pictureRepository, $this->allowedExtensions);
				$fileHelper->delete($file->getMainPicture());

				//Remove blogpost
				$this->blogpost->delete($_POST['id']);
				//Confirmation message
				$this->session->setFlash('Votre article a bien été supprimé.', 'success');
				return $this->redirect('admin/posts');
			}
		}

		/*
		 * Adds tags blogpost references
		 */
		public function addTags($tags, $blogPostId) {
			$this->loadModel('tag'); 
			foreach ($tags as $tag) {
				$this->tag->create([
					'tagId' => $tag->getId(),
					'blogPostId' => $blogPostId
				], 'tag_blogpost');
			}
		}

		/*
		 * Gets whether picture is missing
		 */
		public function pictureIsMissing() {
			return isset($_FILES['picture']) && $_FILES['picture']['error'] === 4;
		}
	}