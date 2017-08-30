<?php
	
	namespace App\Controller\Admin;

	use App\Controller\AppController;

	class TagController extends AppController {
		public function __construct() {
			parent::__construct();			
		}

		/*
		 * Returns tags list
		 */
		public function index() {
			$this->render('admin/tags.twig.html');
		}

		/*
		 * Adds a new tag
		 */
		public function add() {
			$this->render('admin/tags.add.twig.html');
		}

		/*
		 * Edits a tag by id
		 */
		public function edit($id) {
			$this->render('admin/tags.edit.twig.html');
		}

		/*
		 * Deletes a tag
		 */
		public function delete() {
			
		}
	}