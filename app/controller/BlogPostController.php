<?php

	namespace App\Controller;

	class BlogPostController extends AppController {
		public function __construct() {
			parent::__construct();
			$this->loadModel('blogpost');
		}

		/*
		 * Returns blogposts list
		 */
		public function index() {
			//Load tag model
			$this->loadModel('tag');
			//Get tags list			
			$tags = $this->tag->getAll();

			//Get last visible posts
			$lastVisiblePosts = $this->blogpost->getVisibleBlogPosts();

			$this->render('blogposts.twig.html', ['posts' => $lastVisiblePosts, 'tags' => $tags]);
		}

		/*
		 * Gets single blogpost by id
		 */
		public function getSingleBlogPost($id) {
			//Load comments model
			$this->loadModel('comment');

			//Load tag model
			$this->loadModel('tag');
			//Get blogpost's tags
			$tags = $this->tag->getTagsFromBlogPost($id);

			//Get blogpost's data
			$post = $this->blogpost->getSingleBlogPost($id);

			//If post doesn't exist
			if (!$post) {
				return $this->notFound();
			}
						
			//Form handler
			if (!empty($_POST)) {
				//Form error handler
				$formValidation = $this->validateForm($_POST);

				//Form is not valid
				if (!$formValidation['valid']) {
					$this->session->setFlash($formValidation['errorMessage'], 'error');
				} else {
					$result = $this->comment->create([
						'author' => htmlspecialchars($_POST['author']),
						'content' => htmlspecialchars($_POST['content']),
						'blogpost_id' => $post->id
					]);

					if ($result) {
						$this->session->setFlash('Merci pour votre commentaire ! Celui-ci sera visible sur le site après validation.', 'success');
						return $this->redirect('blog/post/'.$post->id);
					}
				}
			}

			//Get comments if enabled
			$comments = [];
			if ($post->comments_enabled) {
				$comments = $this->comment->getBlogPostComments($post->id);
			}

			$this->render('blogpost.twig.html', ['post' => $post, 'tags' => $tags, 'comments' => $comments, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Likes blogpost by id
		 */
		public function like($id) {
			//Get blogpost's data
			$post = $this->blogpost->getSingleBlogPost($id);
			//Update blogpost's nb likes
			$this->blogpost->update($id, [
				'nb_likes' => $post->nb_likes + 1
			]);
			$this->session->setFlash('Merci pour votre like !', 'success');
			$this->redirect('blog/post/'.$post->id);
		}

		/*
		 * Validates form
		 */
		public function validateForm($data) {
			$return = [
				'errorMessage' => null,
				'valid' => true
			];

			if (!$this->tokenIsValid($_POST['token'])) {
				$return['errorMessage'] = "Vous n'avez pas le droit d'effectuer cette action.";
				$return['valid'] = false;
				return $return;
			}

			if (empty($data['author'])) {
				$return['errorMessage'] = "L'auteur est obligatoire.";
				$return['valid'] = false;
				return $return;
			}

			if (empty($data['content'])) {
				$return['errorMessage'] = "Le contenu est obligatoire.";
				$return['valid'] = false;
				return $return;
			}

			return $return;
		}
	}