<?php

	namespace App\Entity;

	class BlogPostEntity extends Entity {
		/*
		 * Gets url
		 */
		public function getUrl() {
			return 'blog/post/'.$this->id;
		}
	}