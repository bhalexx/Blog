<?php

	namespace App\Model;

	class BlogPostModel extends Model {
		/*
		 * Gets all blogposts
		 */
		public function getAll() {
			return $this->query(
				"SELECT bp.id, bp.title, bp.hook, bp.content, bp.author, DATE_FORMAT(bp.date_insert, '%d/%m/%Y') AS date_insert, DATE_FORMAT(bp.date_update, '%d/%m/%Y') AS date_update, bp.main_picture, bp.nb_likes, bp.visible, bp.comments_enabled, bp.nb_comments
				FROM blogpost AS bp
				ORDER BY bp.date_insert DESC"
			);
		}

		/*
		 * Gets single blogpost by id
		 */
		public function getSingleBlogPost($id) {
			return $this->query(
				"SELECT bp.id, bp.title, bp.hook, bp.content, bp.author, DATE_FORMAT(bp.date_insert, '%d/%m/%Y à %H:%i') AS date_insert, DATE_FORMAT(bp.date_update, '%d/%m/%Y à %H:%i') AS date_update, bp.main_picture, bp.nb_likes, bp.visible, bp.comments_enabled, bp.nb_comments
				FROM blogpost AS bp
				WHERE bp.id = ?",
				[$id],
				true
			);
		}

		/*
		 * Gets blogpost's main picture
		 */
		public function getMainPicture($id) {
			return $this->query("
				SELECT main_picture
				FROM blogpost
				WHERE id = ?",
				[$id],
				true
			);
		}
	}

