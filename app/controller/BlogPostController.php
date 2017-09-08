<?php

	namespace App\Controller;

	use App\Entity\CommentEntity;
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
			//Get tags list
			$this->loadModel('tag');
			$tags = $this->tag->getAllWithCountBlogPost();

			//Get last visible posts
			$lastVisiblePosts = $this->blogpost->getAllVisible();

			$this->render('blogposts.twig.html', ['posts' => $lastVisiblePosts, 'tags' => $tags]);
		}

		/*
		 * Gets single blogpost by id
		 */
		public function getSingle($id) {
			//Load comments model
			$this->loadModel('comment');

			//Get blogpost's tags
			$this->loadModel('tag');
			$tags = $this->tag->getAllFromBlogPost($id);

			//Get blogpost's data
			$post = $this->blogpost->getSingle($id);

			//If post doesn't exist
			if (!$post || !$post->getVisible()) {
				return $this->notFound();
			}
						
			//Form handler
			if (!empty($_POST)) {
				//Form validation
				$validator = new FormValidatorHelper($_POST, $this->session->getToken());
				$formIsValid = $validator->checkForm();

				if (!$formIsValid) {
					$this->session->setFlash($validator->getFirstError(), 'error');
				} else {
					//Insert comment
					$comment = new CommentEntity($validator->getSecuredPost());
					$comment->setBlogPostId($post->getId());

					$result = $this->comment->create([
						'author' => $comment->getAuthor(),
						'content' => $comment->getContent(),
						'blogPostId' => $comment->getBlogpostId()
					]);
					
					if ($result) {
						$this->session->setFlash('Merci pour votre commentaire ! Celui-ci sera visible sur le site après validation.', 'success');
						return $this->redirect('blog/post/'.$post->getId());
					}
				}
			}

			//Get comments if enabled
			$comments = [];
			if ($post->getCommentsEnabled()) {
				$comments = $this->comment->getAllVisibleFromBlogPost($post->getId());
			}

			$this->render('blogpost.twig.html', ['post' => $post, 'tags' => $tags, 'comments' => $comments, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Likes blogpost by id
		 */
		public function like($id) {
			//Get blogpost's data
			$post = $this->blogpost->getSingle($id);

			//Count new nb likes
			$nbLikes = $post->getNbLikes() + 1;
			$post->setNbLikes($nbLikes);

			//Update blogpost's nb likes
			$this->blogpost->update($id, [
				'nbLikes' => $nbLikes
			]);

			//Feedback
			$this->session->setFlash('Merci pour votre like !', 'success');

			//Redirect
			$this->redirect('blog/post/'.$post->getId());
		}
	}