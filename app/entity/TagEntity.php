<?php

	namespace App\Entity;

	class TagEntity extends Entity {
		/*
		 * Gets url
		 */
		public function getUrl() {
			return 'blog/tags/'.$this->id;
		}
	}