<?php

	namespace App\Controller;

	class BlogPostController extends AppController {
		public function __construct() {
			parent::__construct();		
		}

		/*
		 * Returns blogposts list
		 */
		public function index() {
			$this->render('blogposts.twig.html');
		}

		/*
		 * Gets single blogpost by id
		 */
		public function getSingleBlogPost($id) {
			$this->render('blogpost.twig.html');
		}

		/*
		 * Likes blogpost by id
		 */
		public function like($id) {
			$this->redirect('blog/post/'.$id);
		}
	}