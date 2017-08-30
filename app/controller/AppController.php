<?php

	namespace App\Controller;
	
	use \App;
	use App\Config;	
	use App\Session;

	class AppController {
		protected $loader;
		protected $twig;
		private $modelName;
		private $config;
		protected $baseUrl;
		protected $session;

		public function __construct() {
			//Config
			$this->config = Config::getInstance(ROOT.'/config/ini.php');
			$this->baseUrl = $this->config->get('base_url');

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
	}