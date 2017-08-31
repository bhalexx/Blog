<?php
	
	namespace App\Controller;

	class HomeController extends AppController {
		/*
		 * Returns home page
		 */
		public function index() {
			$this->render('home.twig.html', ['flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}
	}