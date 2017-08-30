<?php
	
	namespace App\Controller\Admin;

	use App\Controller\AppController;

	class TagController extends AppController {
		public function __construct() {
			parent::__construct();
			$this->loadModel('tag');
		}

		/*
		 * Returns tags list
		 */
		public function index() {
			$allTags = $this->tag->getAll();
			$this->render('admin/tags.twig.html', ['tags' => $allTags, 'count' => count($allTags), 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Adds a new tag
		 */
		public function add() {
			if (!empty($_POST)) {
				//Form error handler
				$formValidation = $this->validateForm($_POST);

				//Form is not valid
				if (!$formValidation['valid']) {
					$this->session->setFlash($formValidation['errorMessage'], 'error');
				} else {
					$result = $this->tag->create([
						'label' => $_POST['label']
					]);

					if ($result) {
						$this->session->setFlash('Votre nouveau tag a bien été créé.', 'success');
						return $this->redirect('admin/tags');
					}
				}
			}
			$this->render('admin/tags.add.twig.html', ['flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Edits a tag by id
		 */
		public function edit($id) {
			if (!empty($_POST)) {
				//Form error handler
				$formValidation = $this->validateForm($_POST);

				//Form is not valid
				if (!$formValidation['valid']) {
					$this->session->setFlash($formValidation['errorMessage'], 'error');
				} else {
					$result = $this->tag->update($id, [
						'label' => $_POST['label']
					]);

					if ($result) {
						$this->session->setFlash('Votre tag a bien été modifié.', 'success');
						return $this->redirect('admin/tags');
					}
				}
			}
			//Get tag's data value
			$tag = $this->tag->getSingle($id);

			$this->render('admin/tags.edit.twig.html', ['tag' => $tag, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Deletes a tag
		 */
		public function delete() {
			if (!empty($_POST)) {
				if (!$this->tokenIsValid($_POST['token'])) {
					$this->session->setFlash("Vous n'avez pas le droit d'effectuer cette action.", 'error');
					return $this->redirect('admin/tags');
				}
				$this->tag->delete($_POST['id']);
				$this->session->setFlash('Le tag a bien été supprimé.', 'success');
				return $this->redirect('admin/tags');
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

			if (empty($data['label'])) {
				$return['errorMessage'] = "Le nom du tag est obligatoire.";
				$return['valid'] = false;
				return $return;
			}

			return $return;
		}
	}