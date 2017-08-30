<?php

	namespace App\Entity;

	use \Core\Entity\Entity;

	class BlogPostEntity extends Entity {
		/*
		 * Gets url
		 */
		public function getUrl() {
			return 'blog/post/'.$this->id;
		}

		/*
		 * Gets HTML content
		 */
		public function getHTMLContent() {
			return htmlspecialchars_decode($this->content);
		}
	}