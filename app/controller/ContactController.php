<?php

	namespace App\Controller;

	class ContactController extends AppController {
		/*
		 * Returns contact page
		 */
		public function index() {
			$this->render('contact.twig.html');
		}
	}