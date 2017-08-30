<?php

	namespace App\Controller\Admin;

	use App\Controller\AppController;

	class CommentController extends AppController {
		public function __construct() {
			parent::__construct();		
		}

		/*
		 * Returns comments list
		 */
		public function index() {
			$this->render('admin/comments.twig.html');
		}

		/*
		 * Validates a new comment
		 */
		public function validate() {
			
		}

		/*
		 * Deletes a new comment
		 */
		public function delete() {
			
		}
	}