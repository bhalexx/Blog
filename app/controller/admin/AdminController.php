<?php

	namespace App\Controller\Admin;

	use App\Controller\AppController;

	class AdminController extends AppController {
		/*
		 * Returns dashboard
		 */
		public function index() {
			$this->loadModel('comment');
			$commentsCount = $this->comment->getAllNewCount();
			
			$this->render('admin/dashboard.twig.html', ['commentsCount' => $commentsCount]);
		}
	}