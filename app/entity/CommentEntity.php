<?php

	namespace App\Entity;

	use \Core\Entity\Entity;

	class CommentEntity extends Entity {
		private $content;
		private $author;
		private $blogPostId;
		private $published;
		private $dateInsert;

		//GETTERS
		/**
		 * Gets content
		 * @return string comment's content
		 */
		public function getContent() {
			return $this->content;
		}

		/**
		 * Gets author
		 * @return string comment's author
		 */
		public function getAuthor() {
			return $this->author;
		}

		/**
		 * Gets blogPostId
		 * @return int comment's blogpost id
		 */
		public function getBlogPostId() {
			return $this->blogPostId;
		}

		/**
		 * Gets published
		 * @return bool comment's published
		 */
		public function getPublished() {
			return $this->published;
		}

		/**
		 * Gets dateInsert
		 * @return comment's date insert
		 */
		public function getDateInsert() {
			return $this->dateInsert;
		}

		/**
		 * Gets blogPostUrl
		 * @return string comment's blogpost url
		 */
		public function getBlogPostUrl() {
			return 'blog/post/'.$this->blogPostId;
		}

		//SETTERS
		/**
		 * Sets content
		 * @param string $content comment's content
		 */
		public function setContent($content) {
			$this->content = $content;
		}

		/**
		 * Sets author
		 * @param string $author comment's author
		 */
		public function setAuthor($author) {
			$this->author = $author;
		}

		/**
		 * Sets blogPostId
		 * @param int $blogPostId comment's blogpost id
		 */
		public function setBlogPostId($blogPostId) {
			$this->blogPostId = $blogPostId;
		}

		/**
		 * Sets published
		 * @param bool $published comment's published
		 */
		public function setPublished($published) {
			$this->published = $published;
		}

		/**
		 * Sets dateInsert
		 * @param $dateInsert comment's date insert
		 */
		public function setDateInsert($dateInsert) {
			$this->dateInsert = $dateInsert;
		}
	}