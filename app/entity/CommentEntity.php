<?php

	namespace App\Entity;

	class CommentEntity extends Entity {
		/*
		 * Gets blogpost url
		 */
		public function getBlogPostUrl() {
			return 'blog/post/'.$this->blogpost_id;
		}
	}