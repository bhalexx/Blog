<?php

	namespace Core\Entity;

	class Entity {

		use \Core\Hydrator;

		protected $id;

		public function __construct($data = []) {
			if (!empty($data)) {
				$this->hydrate($data);
			}
		}

		/**
		 * Gets id
		 * @return int comment's id
		 */
		public function getId() {
			return $this->id;
		}

		/**
		 * Sets id
		 * @param int $id comment's id
		 */
		public function setId($id) {
			$this->id = (int) $id;
		}
	}