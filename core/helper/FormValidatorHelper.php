<?php
	
	namespace Core\Helper;

	class FormValidatorHelper {
		protected $errors = [];
		protected $CSRFToken;
		protected $post = [];
		protected $securedPost = [];
		
		public function __construct($post, $CSRFToken) {
			$this->post = $post;
			$this->CSRFToken = $CSRFToken;
		}

		/**
		 * Checks form
		 * @return function Callback function to execute to filter property
		 */
		public function checkForm() {
			$options = [
				'token' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkCSRFToken']
				],
				'title' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkTitleValidity']
				],
				'hook' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkHookValidity']
				],
				'author' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkAuthorValidity']
				],
				'content' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkContentValidity']
				],
				'tags_valid' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkTagsNotEmpty']
				],
				'tags' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkTagsValidity']
				],
				'picture_valid' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkPictureValidity']
				],
				'label' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkLabelValidity']
				],
				'name' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkNameValidity']
				],
				'mail' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkMailValidity']
				],
				'message' => [
					'filter' => FILTER_CALLBACK,
					'options' => [$this, 'checkMessageValidity']
				]
			];

			$result = filter_var_array($this->post, $options, false);
			$this->securedPost = $result;

			foreach ($result as $key => $value) {
				if (!$value) {
					return false;
				}
			}

			return $this->formIsValid();
		}

		/**
		 * Gets secured post data
		 * @return array securedPost
		 */
		public function getSecuredPost() {
			return $this->securedPost;
		}

		/**
		 * Gets whether form is valid
		 * @return bool empty errors
		 */
		public function formIsValid() {
			return empty($this->errors);
		}

		/**
		 * Gets error
		 * @return array errors
		 */
		public function getErrors() {
			return $this->errors;
		}

		/**
		 * Gets first error
		 * @return string first error
		 */
		public function getFirstError() {
			return $this->errors[0];
		}

		// CALLBACK FUNCTIONS
		/**
		 * Checks CSRF token
		 */
		public function checkCSRFToken() {
			if (!$this->tokenIsValid()) {
				$this->errors[] = "Vous n'avez pas le droit d'effectuer cette action.";
				return $this->errors;
			}
			return $this->post['token'];
		}

		/**
		 * Gets whether posted token is same as session token
		 * @return bool
		 */
		public function tokenIsValid() {
			return !empty($this->post['token']) && $this->post['token'] === $this->CSRFToken;
		}

		/**
		 * Checks title validity
		 */
		public function checkTitleValidity() {
			if (empty(trim($this->post['title']))) {
				$this->errors[] = "Le titre est obligatoire.";
				return $this->errors;
			}
			return htmlspecialchars($this->post['title']);
		}

		/**
		 * Checks hook validity
		 */
		public function checkHookValidity() {
			if (empty(trim($this->post['hook']))) {
				$this->errors[] = "Le chapô est obligatoire.";
				return $this->errors;
			}
			return htmlspecialchars($this->post['hook']);
		}

		/**
		 * Checks author validity
		 */
		public function checkAuthorValidity() {
			if (empty(trim($this->post['author']))) {
				$this->errors[] = "L'auteur est obligatoire.";
				return $this->errors;
			}
			return htmlspecialchars($this->post['author']);
		}

		/**
		 * Checks content validity
		 */
		public function checkContentValidity() {
			if (empty(trim($this->post['content']))) {
				$this->errors[] = "Le contenu est obligatoire.";
				return $this->errors;
			}
			return htmlspecialchars($this->post['content']);
		}
		
		/**
		 * Checks if tags is not empty
		 */
		public function checkTagsNotEmpty() {
			if ($this->post['tags_valid'] === 'false') {
				$this->errors[] = "L'article doit être associé à un tag minimum.";
				return $this->errors;
			}

			return $this->post['tags_valid'];
		}

		/**
		 * Checks tags validity
		 */
		public function checkTagsValidity() {
			if (isset($this->post['tags']) && count($this->post['tags']) > 3) {
				$this->errors[] = "L'article doit être associé à 3 tags maximum.";
				return $this->errors;				
			}

			return $this->post['tags'];
		}

		/**
		 * Checks picture validity
		 */
		public function checkPictureValidity() {
			if ($this->post['picture_valid'] === 'false') {
				$this->errors[] = "L'image est obligatoire.";
				return $this->errors;
			}
			return $this->post['picture_valid'];
		}

		/**
		 * Checks label validity
		 */
		public function checkLabelValidity() {
			if (empty(trim($this->post['label']))) {
				$this->errors[] = "Le nom du tag est obligatoire.";
				return $this->errors;
			}
			return htmlspecialchars($this->post['label']);
		}

		/**
		 * Checks name validity
		 */
		public function checkNameValidity() {
			if (empty(trim($this->post['name']))) {
				$this->errors[] = "Donnez-moi votre nom, ce sera plus simple :)";
				return $this->errors;
			}
			return htmlspecialchars($this->post['name']);
		}

		/**
		 * Checks mail validity
		 */
		public function checkMailValidity() {
			if (empty(trim($this->post['mail']))) {
				$this->errors[] = "Sans votre adresse email, je ne pourrai pas vous répondre !";
				return $this->errors;
			}

			if (!filter_var($this->post['mail'], FILTER_VALIDATE_EMAIL)) {
				$this->errors[] = "Votre adresse email semble incorrecte !";
				return $this->errors;
			}

			return htmlspecialchars($this->post['message']);
		}

		/**
		 * Checks message validity
		 */
		public function checkMessageValidity() {
			if (empty(trim($this->post['message']))) {
				$this->errors[] = "Vous n'avez rien à me dire ?";
				return $this->errors;
			}
			return htmlspecialchars($this->post['message']);
		}		
	}