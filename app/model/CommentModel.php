<?php

	namespace App\Model;

	use \Core\Model\Model;

	class CommentModel extends Model {
		/*
		 * Gets new comments
		 */
		public function getNewComments () {
			return $this->query(
				"SELECT c.id, c.content, c.author, DATE_FORMAT(c.date_insert, '%d/%m/%Y à %H:%i') AS date_insert, bp.id AS blogpost_id, bp.title AS blogpost_title
				FROM comment AS c
				LEFT JOIN blogpost AS bp ON bp.id = c.blogpost_id
				WHERE NOT c.published
				ORDER BY c.date_insert"				
			);
		}

		/*
		 * Gets blogpost comments
		 */
		public function getBlogPostComments ($blogPostId) {
			return $this->query(
				"SELECT c.id, c.content, c.author, DATE_FORMAT(c.date_insert, '%d/%m/%Y à %H:%i') AS date_insert
				FROM comment AS c
				WHERE c.published AND c.blogpost_id = ?
				ORDER BY c.date_insert DESC",
				[$blogPostId]
			);
		}

		/*
		 * Gets new comments count
		 */
		public function getNewCommentsCount () {
			return $this->queryCount(
				"SELECT COUNT(*) AS count
				FROM comment AS c
				WHERE NOT c.published"		
			);
		}
	}