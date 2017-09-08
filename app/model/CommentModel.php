<?php

	namespace App\Model;

	use \Core\Model\Model;

	class CommentModel extends Model {
		/**
		 * Gets single comment
		 * @param  int $id comment's id
		 */
		public function getSingle($id) {
			return $this->query(
				"SELECT id, author, content, blogPostId, published, DATE_FORMAT(dateInsert, '%d/%m/%Y à %H:%i') AS dateInsert
				FROM comment
				WHERE id = ?",
				[$id],
				true
			);
		}

		/*
		 * Gets all new comments
		 */
		public function getAllNew() {
			return $this->query(
				"SELECT c.id, c.content, c.author, DATE_FORMAT(c.dateInsert, '%d/%m/%Y à %H:%i') AS dateInsert, bp.id AS blogPostId, bp.title AS blogpost_title
				FROM comment AS c
				LEFT JOIN blogpost AS bp ON bp.id = c.blogPostId
				WHERE NOT c.published
				ORDER BY c.dateInsert"				
			);
		}

		/*
		 * Gets new comments count
		 */
		public function getAllNewCount() {
			return $this->queryCount(
				"SELECT COUNT(*) AS count
				FROM comment AS c
				WHERE NOT c.published"		
			);
		}

		/*
		 * Gets blogpost comments
		 */
		public function getAllVisibleFromBlogPost($blogPostId) {
			return $this->query(
				"SELECT c.id, c.content, c.author, DATE_FORMAT(c.dateInsert, '%d/%m/%Y à %H:%i') AS dateInsert
				FROM comment AS c
				WHERE c.published AND c.blogPostId = ?
				ORDER BY c.dateInsert DESC",
				[$blogPostId]
			);
		}

		/*
		 * Gets all blogpost comments
		 */
		public function getAllFromBlogPost($blogPostId) {
			return $this->query(
				"SELECT c.id, c.content, c.author, c.published, DATE_FORMAT(c.dateInsert, '%d/%m/%Y à %H:%i') AS dateInsert
				FROM comment AS c
				WHERE c.blogPostId = ?
				ORDER BY c.dateInsert DESC",
				[$blogPostId]
			);
		}

		
	}