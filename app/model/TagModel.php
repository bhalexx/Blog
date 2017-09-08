<?php

	namespace App\Model;

	use \Core\Model\Model;

	class TagModel extends Model {
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
				"SELECT t.id, t.label, COUNT(tbp.tagId) AS 'nb_blogposts'
				FROM tag AS t
				LEFT JOIN tag_blogpost AS tbp ON tbp.tagId = t.id
				GROUP BY t.id"
			);
		}

		/*
		 * Gets tags from blogpost
		 */
		public function getAllFromBlogPost($blogPostId) {
			return $this->query(
				"SELECT tbp.tagId AS id, t.label
				FROM tag_blogpost AS tbp
				LEFT JOIN tag AS t ON t.id = tbp.tagId
				WHERE tbp.blogPostId = ?",
				[$blogPostId]
			);
		}

		/*
		 * Deletes tags references from blogpost
		 */
		public function deleteAllFromBlogPost($blogPostId) {
			return $this->query("DELETE FROM tag_blogpost WHERE blogPostId = ?", [$blogPostId]);
		}
	}