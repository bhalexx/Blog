<?php

	namespace App\Controller\Admin;

	use App\Controller\AppController;

	class CommentController extends AppController {
		public function __construct() {
			parent::__construct();
			$this->loadModel('comment');
		}

		/*
		 * Returns comments list
		 */
		public function index() {
			$allNewComments = $this->comment->getNewComments();
			$this->render('admin/comments.twig.html', ['comments' => $allNewComments, 'count' => count($allNewComments), 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Validates a new comment
		 */
		public function validate() {
			if (!empty($_POST['comment_id'])) {
				//Form error handler
				$formValidation = $this->validateForm($_POST);

				//Form is not valid
				if (!$formValidation['valid']) {
					$this->session->setFlash($formValidation['errorMessage'], 'error');
					return $this->redirect('admin/comments');
				} else {
					$result = $this->comment->update($_POST['comment_id'], [
						'published' => true
					]);

					if ($result) {
						$this->session->setFlash('Le commentaire a été validé, il est désormais visible sur le site.', 'success');

						//If request comes from blogpost edition
						if ($_POST['from'] === 'blogpostEdit') {
							return $this->redirect('admin/post/edit/'.$_POST['blogpostId']);
						}

						return $this->redirect('admin/comments');
					}
				}
			}
		}

		/*
		 * Deletes a new comment
		 */
		public function delete() {
			if (!empty($_POST['comment_id'])) {
				//Form error handler
				$formValidation = $this->validateForm($_POST);

				//Form is not valid
				if (!$formValidation['valid']) {
					$this->session->setFlash($formValidation['errorMessage'], 'error');
					return $this->redirect('admin/comments');
				} else {
					$result = $this->comment->delete($_POST['comment_id']);

					if ($result) {
						$this->session->setFlash('Le commentaire a été supprimé, il ne sera jamais visible sur le site.', 'success');

						//If request comes from blogpost edition
						if ($_POST['from'] === 'blogpostEdit') {
							return $this->redirect('admin/post/edit/'.$_POST['blogpostId']);
						}

						return $this->redirect('admin/comments');
					}
				}
			}
		}

		/*
		 * Validates form
		 */
		public function validateForm($data) {
			$return = [
				'errorMessage' => null,
				'valid' => true
			];

			if (!$this->tokenIsValid($data['token'])) {
				$return['errorMessage'] = "Vous n'avez pas le droit d'effectuer cette action.";
				$return['valid'] = false;
				return $return;
			}

			if (empty($data['comment_id'])) {
				$return['errorMessage'] = "Une erreur est survenue. L'id du commentaire ne peut être manquant.";
				$return['valid'] = false;
				return $return;
			}

			return $return;
		}
	}