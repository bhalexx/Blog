<?php

	namespace App\Entity;

	use \Core\Entity\Entity;

	class TagEntity extends Entity {

		protected $label;

		//GETTERS
		/**
		 * Gets label
		 * @return string tag's label
		 */
		public function getLabel() {
			return $this->label;
		}
		
		/**
		 * Gets url
		 * @return string tag's url
		 */
		public function getUrl() {
			return 'blog/tags/'.$this->id;
		}

		//SETTERS
		/**
		 * Sets label
		 * @param string $label tag's label
		 */
		public function setLabel($label) {
			$this->label = $label;
		}
	}