<?php

	namespace App\Controller\Admin;

	use App\Controller\AppController;
	use App\Entity;
	use Core\Helper\FileUploadHelper;

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
			//Load tag model
			$this->loadModel('tag');
			//Get tags list			
			$tags = $this->tag->getAll();

			//Posted form
			if (!empty($_POST)) {
				//Form error handler
				$formValidation = $this->validateForm($_POST, true);

				//Form is not valid
				if (!$formValidation['valid']) {
					$this->session->setFlash($formValidation['errorMessage'], 'error');
				} else {
					//Upload File
					$file = new FileUploadHelper($_FILES['picture'], $this->pictureRepository, $this->allowedExtensions);
					$upload = $file->upload();
					if (!$upload) {
						$this->session->setFlash($file->error, 'error');
						return $this->render('admin/blogpost.add.twig.html', ['tags' => $tags, 'data' => $_POST, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
					}
					$fileName = $file->fileName;
					//Insert blogpost in database
					$result = $this->blogpost->create([
						'title' => htmlspecialchars($_POST['title']),
						'hook' => htmlspecialchars($_POST['hook']),
						'content' => $_POST['content'],
						'author' => htmlspecialchars($_POST['author']),
						'main_picture' => $fileName,
						'visible' => isset($_POST['visible']),
						'comments_enabled' => isset($_POST['comments_enabled'])
					]);

					//Get new blogpost's id
					$blogPostId = $this->blogpost->getLastInsertId();
					//Insert blogpost's tags references
					$this->addTags($_POST['tags'], $blogPostId);

					if ($result) {
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
			$post = $this->blogpost->getSingleBlogPost($id);
			// Load tag model			
			$this->loadModel('tag');		
			//Get blogpost's tags
			$selectedTags = $this->tag->getTagsFromBlogPost($id);
			//Get tags list
			$tags = $this->tag->getAll();
			
			//Build tags list by comparing full tags list with blogpost's selected tags
			$tagsList = [];
			foreach ($tags as $tag) {
				$newTag = new Entity\TagEntity();
				$newTag->id = $tag->id;
				$newTag->label = $tag->label;
				$newTag->selected = in_array($tag, $selectedTags);
				
				$tagsList[] = $newTag;
			}
			
			//Posted form
			if (!empty($_POST)) {
				//Form error handler
				$formValidation = $this->validateForm($_POST);

				//Form is not valid
				if (!$formValidation['valid']) {
					$this->session->setFlash($formValidation['errorMessage'], 'error');
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
						$file->delete($post->main_picture);
						$fileName = $file->fileName;
					} else {
						$fileName = $post->main_picture;
					}
					//Update blogpost in database
					$result = $this->blogpost->update($id, [
						'title' => htmlspecialchars($_POST['title']),
						'hook' => htmlspecialchars($_POST['hook']),
						'content' => htmlspecialchars($_POST['content']),
						'author' => htmlspecialchars($_POST['author']),
						'main_picture' => $fileName,
						'visible' => isset($_POST['visible']),
						'comments_enabled' => isset($_POST['comments_enabled'])
					]);

					//Delete all blogpost's tags references
					$this->tag->deleteTagsReferencesFromBlogPost($id);
					//Insert blogpost's tags references
					$this->addTags($_POST['tags'], $id);

					if ($result) {
						$this->session->setFlash('Votre article a bien été modifié.', 'success');
						return $this->redirect('admin/posts');
					}
				}
			}

			$this->render('admin/blogpost.edit.twig.html', ['post' => $post, 'tags' => $tagsList, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Deletes a blogpost
		 */
		public function delete() {
			if (!empty($_POST)) {
				if (empty($_POST['token']) || $_POST['token'] !== $this->session->getToken()) {
					$this->session->setFlash("Vous n'avez pas le droit d'effectuer cette action.", 'error');
					return $this->redirect('admin/posts');
				}

				//Remove blogpost's picture file
				$file = $this->blogpost->getMainPicture($_POST['id']);
				$fileHelper = new FileUploadHelper($file->main_picture, $this->pictureRepository, $this->allowedExtensions);
				$fileHelper->delete($file->main_picture);
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
					'tag_id' => $tag,
					'blogpost_id' => $blogPostId
				], 'tag_blogpost');
			}
		}

		/*
		 * Validates form
		 */
		public function validateForm($data, $fileIsRequired = false) {
			$return = [
				'errorMessage' => null,
				'valid' => true
			];

			if (!$this->tokenIsValid($_POST['token'])) {
				$return['errorMessage'] = "Vous n'avez pas le droit d'effectuer cette action.";
				$return['valid'] = false;
				return $return;
			}

			if (empty($_POST['title'])) {
				$return['errorMessage'] = "Le titre est obligatoire.";
				$return['valid'] = false;
				return $return;
			}

			if (empty($_POST['hook'])) {
				$return['errorMessage'] = "Le chapô est obligatoire.";
				$return['valid'] = false;
				return $return;
			}
			
			if (empty($_POST['content'])) {
				$return['errorMessage'] = "Le contenu est obligatoire.";
				$return['valid'] = false;
				return $return;
			}

			if (empty($_POST['author'])) {
				$return['errorMessage'] = "L'auteur est obligatoire.";
				$return['valid'] = false;
				return $return;
			}
			
			if ($fileIsRequired) {
				if ($this->pictureIsMissing()) {
					$return['errorMessage'] = "L'image est obligatoire.";
					$return['valid'] = false;
					return $return;	
				}
			}

			if (!isset($_POST['tags'])) {
				$return['errorMessage'] = "L'article doit être associé à un tag minimum.";
				$return['valid'] = false;
				return $return;	
			}

			if (isset($_POST['tags']) && count($_POST['tags']) > 3) {
				$return['errorMessage'] = "L'article doit être associé à 3 tags maximum.";
				$return['valid'] = false;
				return $return;	
			}

			return $return;
		}

		/*
		 * Gets whether picture is missing
		 */
		public function pictureIsMissing() {
			return isset($_FILES['picture']) && $_FILES['picture']['error'] === 4;
		}
	}