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
		 * Gets all tags with count blogpost
		 */
		public function getAllWithCountBlogPost() {
			return $this->query(
				"SELECT t.id, t.label, COUNT(tbp.tag_id) AS 'nb_blogposts'
				FROM tag AS t
				LEFT JOIN tag_blogpost AS tbp ON tbp.tag_id = t.id
				GROUP BY t.id"
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