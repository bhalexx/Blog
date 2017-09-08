<?php

	namespace App\Model;

	use \Core\Model\Model;

	class BlogPostModel extends Model {
		/*
		 * Gets single blogpost by id
		 */
		public function getSingle($id) {
			return $this->query(
				"SELECT bp.id, bp.title, bp.hook, bp.content, bp.author, DATE_FORMAT(bp.dateInsert, '%d/%m/%Y à %H:%i') AS dateInsert, DATE_FORMAT(bp.dateUpdate, '%d/%m/%Y à %H:%i') AS dateUpdate, bp.mainPicture, bp.nbLikes, bp.visible, bp.commentsEnabled, bp.nbComments
				FROM blogpost AS bp
				WHERE bp.id = ?",
				[$id],
				true
			);
		}

		/*
		 * Gets all blogposts
		 */
		public function getAll() {
			return $this->query(
				"SELECT bp.id, bp.title, bp.hook, bp.content, bp.author, DATE_FORMAT(bp.dateInsert, '%d/%m/%Y') AS dateInsert, DATE_FORMAT(bp.dateUpdate, '%d/%m/%Y') AS dateUpdate, bp.mainPicture, bp.nbLikes, bp.visible, bp.commentsEnabled, bp.nbComments
				FROM blogpost AS bp
				ORDER BY bp.dateInsert DESC"
			);
		}

		/*
		 * Gets visible blogposts
		 */
		public function getAllVisible() {
			return $this->query(
				"SELECT bp.id, bp.title, bp.hook, bp.content, bp.author, DATE_FORMAT(bp.dateInsert, '%d/%m/%Y') AS dateInsert, DATE_FORMAT(bp.dateUpdate, '%d/%m/%Y') AS dateUpdate, bp.mainPicture, bp.nbLikes, bp.visible, bp.commentsEnabled, bp.nbComments
				FROM blogpost AS bp
				WHERE bp.visible
				ORDER BY bp.dateInsert DESC"
			);
		}

		/*
		 * Gets blogposts by tag
		 */
		public function getAllVisibleByTag($tagId) {
			return $this->query("
				SELECT tbp.tagId, bp.id, bp.title, bp.hook, bp.content, bp.author, DATE_FORMAT(bp.dateUpdate, '%d/%m/%Y') AS dateUpdate, bp.mainPicture
				FROM tag_blogpost AS tbp
				LEFT JOIN blogpost AS bp ON bp.id = tbp.blogPostId
				WHERE bp.visible AND tbp.tagId = ?
				ORDER BY bp.dateInsert DESC",
				[$tagId]
			);
		}

		/*
		 * Gets blogpost's main picture
		 */
		public function getMainPicture($id) {
			return $this->query("
				SELECT mainPicture
				FROM blogpost
				WHERE id = ?",
				[$id],
				true
			);
		}
	}