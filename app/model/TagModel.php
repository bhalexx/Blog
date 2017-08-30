<?php

	namespace App\Model;

	use \Core\Model\Model;

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

		/*
		 * Gets tags from blogpost
		 */
		public function getTagsFromBlogPost($blogPostId) {
			return $this->query(
				"SELECT tbp.tag_id AS id, t.label
				FROM tag_blogpost AS tbp
				LEFT JOIN tag AS t ON t.id = tbp.tag_id
				WHERE tbp.blogpost_id = ?",
				[$blogPostId]
			);
		}

		/*
		 * Deletes tags references from blogpost
		 */
		public function deleteTagsReferencesFromBlogPost($blogPostId) {
			return $this->query("DELETE FROM tag_blogpost WHERE blogpost_id = ?", [$blogPostId]);
		}
	}