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
			$this->render('admin/tags.twig.html', ['tags' => $allTags, 'count' => count($allTags)]);
		}

		/*
		 * Adds a new tag
		 */
		public function add() {
			if (!empty($_POST)) {
				//Error handler
				$formIsValid = true;
				$errorMessage = '';

				if (empty($_POST['label'])) {
					$errorMessage = "Le nom du tag est obligatoire.";
					$formIsValid = false;
				}

				if ($formIsValid) {
					$result = $this->tag->create([
						'label' => $_POST['label']
					]);

					if ($result) {
						return $this->redirect('admin/tags');
					}
				}
			}
			$this->render('admin/tags.add.twig.html');
		}

		/*
		 * Edits a tag by id
		 */
		public function edit($id) {
			if (!empty($_POST)) {
				//Error handler
				$formIsValid = true;
				$errorMessage = '';

				if (empty($_POST['label'])) {
					$errorMessage = "Le nom du tag est obligatoire.";
					$formIsValid = false;
				}

				if ($formIsValid) {
					$result = $this->tag->update($id, [
						'label' => $_POST['label']
					]);

					if ($result) {
						return $this->redirect('admin/tags');
					}
				}
			}
			//Get tag's data value
			$tag = $this->tag->getSingle($id);

			$this->render('admin/tags.edit.twig.html', ['tag' => $tag]);
		}

		/*
		 * Deletes a tag
		 */
		public function delete() {
			var_dump($_POST);
			if (!empty($_POST)) {
				$this->tag->delete($_POST['id']);
				return $this->redirect('admin/tags');
			}
		}
	}