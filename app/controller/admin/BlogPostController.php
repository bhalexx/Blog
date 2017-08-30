<?php

	namespace App\Controller\Admin;

	use App\Controller\AppController;
	use App\Entity;
	use \Core\Helper\FileUploadHelper;

	class BlogPostController extends AppController {
		public function __construct() {
			parent::__construct();	
		}

		/*
		 * Returns blogposts list
		 */
		public function index() {
			$this->render('admin/blogpost.twig.html');
		}

		/*
		 * Adds a new blogpost
		 */
		public function add() {
			$this->render('admin/blogpost.add.twig.html');
		}

		/*
		 * Edits a blogpost by id
		 */
		public function edit($id) {
			$this->render('admin/blogpost.edit.twig.html');
		}

		/*
		 * Deletes a blogpost
		 */
		public function delete() {
			
		}
	}