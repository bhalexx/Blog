<?php

	namespace App\Entity;

	use \Core\Entity\Entity;

	class TagEntity extends Entity {
		/*
		 * Gets url
		 */
		public function getUrl() {
			return 'blog/tags/'.$this->id;
		}
	}