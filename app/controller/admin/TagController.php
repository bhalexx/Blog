<?php
	
	namespace App\Controller\Admin;

	use App\Controller\AppController;
	use \App\Entity\TagEntity;
	use \Core\Helper\FormValidatorHelper;

	class TagController extends AppController {
		public function __construct() {
			parent::__construct();
			$this->loadModel('tag');
		}

		/*
		 * Returns tags list
		 */
		public function index() {
			$allTags = $this->tag->getAllWithCountBlogPost();

			$this->render('admin/tags.twig.html', ['tags' => $allTags, 'count' => count($allTags), 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Adds a new tag
		 */
		public function add() {
			if (!empty($_POST)) {
				//Form validation
				$validator = new FormValidatorHelper($_POST, $this->session->getToken());
				$formIsValid = $validator->checkForm();

				if (!$formIsValid) {
					$this->session->setFlash($validator->getFirstError(), 'error');
				} else {
					$tag = new TagEntity($validator->getSecuredPost());
					$result = $this->tag->create([
						'label' => $tag->getLabel()
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
			//Get tag's data value
			$tag = $this->tag->getSingle($id);

			if (!empty($_POST)) {
				//Form validation
				$validator = new FormValidatorHelper($_POST, $this->session->getToken());
				$formIsValid = $validator->checkForm();

				if (!$formIsValid) {
					$this->session->setFlash($validator->getFirstError(), 'error');
				} else {
					//Set tag
					foreach($validator->getSecuredPost() as $key => $value) {
						$funcName = "set".ucfirst($key);
						if (method_exists($tag, $funcName)) {
							$tag->$funcName($value);							
						}
					}
					//Update tag in database
					$result = $this->tag->update($id, [
						'label' => $tag->getLabel()
					]);

					if ($result) {
						$this->session->setFlash('Votre tag a bien été modifié.', 'success');
						return $this->redirect('admin/tags');
					}
				}
			}
			
			$this->render('admin/tags.edit.twig.html', ['tag' => $tag, 'flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Deletes a tag
		 */
		public function delete() {
			if (!empty($_POST)) {
				//Form validation
				$validator = new FormValidatorHelper($_POST, $this->session->getToken());
				$formIsValid = $validator->checkForm();
				if (!$formIsValid) {
					$this->session->setFlash($validator->getFirstError(), 'error');
					return $this->redirect('admin/tags');
				}

				$this->tag->delete($_POST['id']);
				$this->session->setFlash('Le tag a bien été supprimé.', 'success');
				return $this->redirect('admin/tags');
			}
		}
	}