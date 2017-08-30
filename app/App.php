<?php

	namespace App;
	
	use App\Autoloader;
	use App\Config;
	use App\Database\MySQLDatabase;
	use App\Router\Router;

	class App {
		private $db_instance;
		private static $instance;

		public static function getInstance() {
			if (is_null(self::$instance)) {
				self::$instance = new App();
			}

			return self::$instance;
		}

		/*
		 * Loads application dependencies, autoloader and runs router
		 */
		public static function load() {
			require ROOT.'/vendor/autoload.php';
			require ROOT.'/app/Autoloader.php';
			Autoloader::register();

			$router = new Router($_GET['url']);

			//FRONT
			//Home
			$router->get('/', 'Home#index');
			$router->get('/home', 'Home#index');
			//Blog
			$router->get('/blog', 'BlogPost#index');
			//Contact
			$router->get('/contact', 'Contact#index');

			//ADMIN
			//Dashboard
			$router->get('/admin', 'Admin\Admin#index');
			//Blog posts
			$router->get('/admin/posts', 'Admin\BlogPost#index');
			//Comments
			$router->get('/admin/comments', 'Admin\Comment#index');
			//Tags
			$router->get('/admin/tags', 'Admin\Tag#index');

			$router->run();
		}

		/*
		 * Gets model
		 * @return model class instanciation
		 */
		public function getModel($modelName) {
			$class_name = '\\App\\Model\\'.ucfirst($modelName).'Model';
			return new $class_name($this->getDb());
		}

		/*
		 * Gets database instance
		 */
		public function getDb() {
			$config = Config::getInstance(ROOT.'/config/ini.php');
			if (is_null($this->db_instance)) {
				$this->db_instance = new MySQLDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
			}

			return $this->db_instance;
		}
	}