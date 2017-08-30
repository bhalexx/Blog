<?php
	namespace App\Controller;

	class ErrorController extends AppController {
		private $folder = 'error/';

		public function notFound() {
			$this->render($this->folder.'404.twig.html');
		}

		public function forbidden() {
			$this->render($this->folder.'403.twig.html');
		}
	}