<?php
	
	namespace App\Controller;

	use App\Controller\AppController;

	class TagController extends AppController {
		public function __construct() {
			parent::__construct();
			$this->loadModel('tag');			
			$this->loadModel('blogpost');		
		}

		/*
		 * Gets blogpost by tag
		 */
		public function showBlogPostsList($id) {
			$tag = $this->tag->getSingle($id);
			$postsList = $this->blogpost->getBlogPostsByTag($id);
			$this->render('tag.twig.html', ['tag' => $tag, 'posts' => $postsList]);
		}
	}