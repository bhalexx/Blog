<?php
	
	namespace App\Controller;

	class CommentController extends AppController {
		public function __construct() {
			parent::__construct();
			$this->loadModel('comment');			
		}
	}