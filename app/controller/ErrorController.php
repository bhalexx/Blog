<?php
	namespace App\Controller;

	class ErrorController extends AppController {
		private $folder = 'error/';

		/*
		 * Renders 404 view
		 */
		public function notFound() {
			$this->render($this->folder.'404.twig.html');
		}

		/*
		 * Renders 403 view
		 */
		public function forbidden() {
			$this->render($this->folder.'403.twig.html');
		}
	}