<?php

	namespace App\Controller\Error;

	use \App\Controller\AppController;

	class ErrorController extends AppController {
		public function __construct() {
			parent::__construct();
		}

		/*
		 * Returns not found HTTP error
		 */
		public function notFound() {
			header('HTTP/1.0 404 Not Found');
			$this->render('error/404.twig.html');
		}

		/*
		 * Returns forbidden HTTP error
		 */
		public function forbidden() {
			header('HTTP/1.0 403 Forbidden');
			$this->render('error/403.twig.html');
		}
	}