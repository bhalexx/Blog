<?php

	namespace App\Controller\Admin;

	use App\Controller\AppController;
	use \Core\Helper\FormValidatorHelper;

	class CommentController extends AppController {
		public function __construct() {
			parent::__construct();
			$this->loadModel('comment');
		}

		/*
		 * Returns comments list
		 */
		public function index() {
			$allNewComments = $this->comment->getAllNew();

			$this->render('admin/comments.twig.html', ['comments' => $allNewComments, 'count' => count($allNewComments), 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Validates a new comment
		 */
		public function validate() {
			if (!empty($_POST['comment_id'])) {
				$comment = $this->comment->getSingle($_POST['comment_id']);

				$redirectPath = $_POST['from'] === 'blogpostEdit' ? 'admin/post/edit/'.$comment->getBlogPostId() : 'admin/comments';

				//Form validation
				$validator = new FormValidatorHelper($_POST, $this->session->getToken());
				$formIsValid = $validator->checkForm();

				if (!$formIsValid) {
					$this->session->setFlash($validator->getFirstError(), 'error');
					return $this->redirect($redirectPath);
				} else {
					$comment->setPublished(true);
					
					$result = $this->comment->update($comment->getId(), [
						'published' => $comment->getPublished()
					]);

					if ($result) {
						$this->session->setFlash('Le commentaire a été validé, il est désormais visible sur le site.', 'success');
						return $this->redirect($redirectPath);
					}
				}
			}
			return $this->redirect('admin/comments');
		}

		/*
		 * Deletes a new comment
		 */
		public function delete() {
			if (!empty($_POST['comment_id'])) {
				$comment = $this->comment->getSingle($_POST['comment_id']);

				$redirectPath = $_POST['from'] === 'blogpostEdit' ? 'admin/post/edit/'.$comment->getBlogPostId() : 'admin/comments';

				//Form validation
				$validator = new FormValidatorHelper($_POST, $this->session->getToken());
				$formIsValid = $validator->checkForm();

				if (!$formIsValid) {
					$this->session->setFlash($validator->getFirstError(), 'error');
					return $this->redirect($redirectPath);
				} else {
					$result = $this->comment->delete($comment->getId());

					if ($result) {
						$this->session->setFlash('Le commentaire a été supprimé, il ne sera jamais visible sur le site.', 'success');
						return $this->redirect($redirectPath);
					}
				}
			}
			return $this->redirect('admin/comments');
		}
	}