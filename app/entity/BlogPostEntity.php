<?php

	namespace App\Entity;

	use \Core\Entity\Entity;
	use App\Entity\TagEntity;

	class BlogPostEntity extends Entity {
		protected $title;
		protected $hook;
		protected $content;
		protected $author;
		protected $dateInsert;
		protected $dateUpdate;
		protected $mainPicture;
		protected $nbLikes;
		protected $visible;
		protected $commentsEnabled;
		protected $nbComments;
		protected $tags = [];

		//GETTERS
		/**
		 * Gets title
		 * @return string blogpost's title
		 */
		public function getTitle() {
			return $this->title;
		}

		/**
		 * Gets hook
		 * @return string blogpost's hook
		 */
		public function getHook() {
			return $this->hook;
		}

		/**
		 * Gets content
		 * @return string blogpost's content
		 */
		public function getContent() {
			return $this->content;
		}

		/**
		 * Gets author
		 * @return string blogpost's author
		 */
		public function getAuthor() {
			return $this->author;
		}

		/**
		 * Gets date insert
		 * @return datetime blogpost's date insert
		 */
		public function getDateInsert() {
			return $this->dateInsert;
		}

		/**
		 * Gets date update
		 * @return datetime blogpost's date update
		 */
		public function getDateUpdate() {
			return $this->dateUpdate;
		}

		/**
		 * Gets main picture
		 * @return string blogpost's main picture
		 */
		public function getMainPicture() {
			return $this->mainPicture;
		}

		/**
		 * Gets nb likes
		 * @return int blogpost's nb likes
		 */
		public function getNbLikes() {
			return $this->nbLikes;
		}

		/**
		 * Gets visibility
		 * @return bool blogpost's visibility
		 */
		public function getVisible() {
			return $this->visible;
		}

		/**
		 * Gets comments enabled
		 * @return bool blogpost's comments enabled
		 */
		public function getCommentsEnabled() {
			return $this->commentsEnabled;
		}

		/**
		 * Gets nb comments
		 * @return int blogpost's nb comments
		 */
		public function getNbComments() {
			return $this->nbComments;
		}

		/**
		 * Gets tags
		 * @return array blogpost's tags
		 */
		public function getTags() {
			return $this->tags;
		}

		/**
		 * Gets url
		 * @return string blogpost's url
		 */
		public function getUrl() {
			return 'blog/post/'.$this->id;
		}

		/**
		 * Gets HTML content
		 * @return string blogpost's HTML decoded content
		 */
		public function getHTMLContent() {
			return htmlspecialchars_decode($this->content);
		}

		//SETTERS
		/**
		 * Sets title
		 * @param string $title blogpost's title
		 */
		public function setTitle($title) {
			$this->title = $title;
		}

		/**
		 * Sets hook
		 * @param string $hook blogpost's hook
		 */
		public function setHook($hook) {
			$this->hook = $hook;
		}

		/**
		 * Sets content
		 * @param string $content blogpost's content
		 */
		public function setContent($content) {
			$this->content = $content;
		}

		/**
		 * Sets author
		 * @param string $author blogpost's author
		 */
		public function setAuthor($author) {
			$this->author = $author;
		}

		/**
		 * Sets dateInsert
		 * @param $dateInsert blogpost's date insert
		 */
		public function setDateInsert($date) {
			$this->dateInsert = $date;
		}

		/**
		 * Sets dateUdpdate
		 * @param $dateUdpdate blogpost's date update
		 */
		public function setDateUpdate($date) {
			$this->dateUpdate = $date;
		}

		/**
		 * Sets main picture
		 * @param string $picture blogpost's main picture
		 */
		public function setMainPicture($picture) {
			$this->mainPicture = $picture;
		}

		/**
		 * Sets nb likes
		 * @param int $nbLikes blogpost's nbLikes
		 */
		public function setNbLikes($nbLikes) {
			$this->nbLikes = $nbLikes;
		}

		/**
		 * Sets visibility
		 * @param bool $visible blogpost's visibility
		 */
		public function setVisible($visible) {
			$this->visible = $visible;
		}

		/**
		 * Sets commentsEnabled
		 * @param bool $enabled blogpost's comments enabled
		 */
		public function setCommentsEnabled($enabled) {
			$this->commentsEnabled = $enabled;
		}

		/**
		 * Set nb comments 
		 * @param int $count blogpost's nb comments
		 */
		public function setNbComments($count) {
			$this->nbComments = (int) $count;
		}

		/**
		 * Adds tag
		 * @param Tag $tag blogpost's tag
		 */
		public function addTag(TagEntity $tag) {
			$this->tags[] = $tag;
		}

		/**
		 * Resets tags
		 */
		public function resetTags() {
			$this->tags = [];
		}
		
	}