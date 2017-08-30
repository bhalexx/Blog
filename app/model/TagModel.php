<?php

	namespace App\Model;

	class TagModel extends Model {
		/*
		 * Gets all tags
		 */
		public function getAll() {
			return $this->query(
				"SELECT id, label
				FROM tag"
			);
		}

		/*
		 * Gets single tag
		 */
		public function getSingle($id) {
			return $this->query(
				"SELECT id, label
				FROM tag
				WHERE id = ?",
				[$id],
				true
			);
		}
	}