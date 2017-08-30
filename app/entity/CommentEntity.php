<?php

	namespace App\Entity;

	use \Core\Entity\Entity;

	class CommentEntity extends Entity {
		/*
		 * Gets blogpost url
		 */
		public function getBlogPostUrl() {
			return 'blog/post/'.$this->blogpost_id;
		}
	}