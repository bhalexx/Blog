<?php

	namespace App\Controller;
	
	use \App;
	use Core\Config;	
	use Core\Session;

	class AppController {
		protected $loader;
		protected $twig;
		private $modelName;
		private $config;
		protected $baseUrl;
		protected $session;
		protected $pictureRepository;
		protected $allowedExtensions;

		public function __construct() {
			//Config
			$this->config = Config::getInstance(ROOT.'/config/ini.php');
			$this->baseUrl = $this->config->get('base_url');
			$this->pictureRepository = $this->config->get('picture_repository');
			$this->allowedExtensions = $this->config->get('allowed_extensions');

			//Session
			$this->session = new Session();

			//Twig instanciation
			$this->loader = new \Twig_Loader_Filesystem(dirname(__DIR__).'/view');
			$this->twig = new \Twig_Environment($this->loader, [
				// 'cache' => dirname(__DIR__).'/tmp'
				'cache' => false, // for debug
				'debug' => true
			]);
			$this->twig->addExtension(new \Twig_Extension_Debug());
			$this->twig->addExtension(new \Twig_Extensions_Extension_Text());
			$this->twig->addGlobal('base_url', $this->baseUrl);
			$this->twig->addGlobal('picture_repository', $this->pictureRepository);

			//Token (avoid CSRF)
			if (is_null($this->session->getToken())) {
				$token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
				$this->session->setToken($token);				
			}
		}

		/*
		 * Loads model
		 */
		public function loadModel($modelName) {
			$this->$modelName = App\App::getInstance()->getModel($modelName);
		}

		/*
		 * Renders twig view
		 */
		public function render($view, $params = null) {			
			if (is_null($params)) {
				$twigView = $this->twig->render($view);
			} else {
				$twigView = $this->twig->render($view, $params);
			}

			echo $twigView;
		}

		/*
		 * Redirects to URL
		 */
		public function redirect($url) {
			header('Location: '.$this->config->get('base_url').$url);
		}

		/*
		 * Returns not found HTTP error
		 */
		public function notFound() {
			header('HTTP/1.0 404 Not Found');
			die("Page introuvable");
		}

		/*
		 * Returns forbidden HTTP error
		 */
		public function forbidden() {
			header('HTTP/1.0 403 Forbidden');
			die('Accès interdit !');
		}

		/*
		 * Gets whether posted token is same as session token
		 */
		public function tokenIsValid($token) {
			return !empty($_POST['token']) && $_POST['token'] === $this->session->getToken();
		}
	}