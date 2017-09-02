<?php

	namespace App\Controller;
	
	use \App;
	use Core\Config;	
	use Core\Session;

	class AppController {
		protected $loader;
		protected $baseUrl;
		protected $session;
		protected $pictureRepository;
		protected $allowedExtensions;
		protected $twig;
		protected $smtpHost;
		protected $smtpUsername;
		protected $smtpPassword;
		protected $mailTo;
		protected $mailToName;
		protected $debug;
		private $modelName;
		private $config;

		public function __construct() {
			//Config
			$this->config = Config::getInstance(ROOT.'/config/ini.php');
			$this->baseUrl = $this->config->get('base_url');
			$this->pictureRepository = $this->config->get('picture_repository');
			$this->allowedExtensions = $this->config->get('allowed_extensions');
			$this->smtpHost = $this->config->get('smtp_host');
			$this->smtpUsername = $this->config->get('smtp_username');
			$this->smtpPassword = $this->config->get('smtp_password');
			$this->mailTo = $this->config->get('mail_to');
			$this->mailToName = $this->config->get('mail_to_name');
			$this->debug = $this->config->get('debug');

			//Session
			$this->session = new Session();

			//Twig instanciation
			$this->loader = new \Twig_Loader_Filesystem(dirname(__DIR__).'/view');
			$cache = $this->debug ? false : dirname(__DIR__).'/view/tmp';
			$this->twig = new \Twig_Environment($this->loader, [
				'cache' => $cache, // for debug
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
			$this->redirect('error/404');
		}

		/*
		 * Returns forbidden HTTP error
		 */
		public function forbidden() {
			$this->redirect('error/403');	
		}

		/*
		 * Gets whether posted token is same as session token
		 */
		public function tokenIsValid($token) {
			return !empty($_POST['token']) && $_POST['token'] === $this->session->getToken();
		}
	}