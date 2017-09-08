<?php

	namespace App;
	
	use Core\Autoloader;
	use Core\Config;
	use Core\Database\MySQLDatabase;
	use Core\Router\Router;

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
			require ROOT.'/core/Autoloader.php';
			Autoloader::register();

			$router = new Router($_GET['url']);

			//FRONT
			//Home
			$router->get('/', 'Home#index');
			$router->get('/home', 'Home#index');
			//Blog
			$router->get('/blog', 'BlogPost#index');
			//Single blog post
			$router->get('/blog/post/:id', 'BlogPost#getSingle')->with('id', '[0-9]+');
			$router->post('/blog/post/:id', 'BlogPost#getSingle')->with('id', '[0-9]+');
			$router->get('/blog/post/like/:id', 'BlogPost#like')->with('id', '[0-9]+');
			//Tags
			$router->get('/blog/tags/:id', 'Tag#showBlogPostsList')->with('id', '[0-9]+');
			//Contact
			$router->get('/contact', 'Contact#index');
			$router->post('/contact/sendMail', 'Contact#sendMail');

			//ADMIN
			//Dashboard
			$router->get('/admin', 'Admin\Admin#index');
			//Blog posts
			$router->get('/admin/posts', 'Admin\BlogPost#index');
			$router->get('/admin/post/add', 'Admin\BlogPost#add');
			$router->post('/admin/post/add', 'Admin\BlogPost#add');
			$router->get('/admin/post/edit/:id', 'Admin\BlogPost#edit')->with('id', '[0-9]+');
			$router->post('/admin/post/edit/:id', 'Admin\BlogPost#edit')->with('id', '[0-9]+');
			$router->post('/admin/post/delete', 'Admin\BlogPost#delete');
			//Comments
			$router->get('/admin/comments', 'Admin\Comment#index');
			$router->post('/admin/comments/validate', 'Admin\Comment#validate');
			$router->post('/admin/comments/delete', 'Admin\Comment#delete');
			//Tags
			$router->get('/admin/tags', 'Admin\Tag#index');
			$router->get('/admin/tags/add', 'Admin\Tag#add');
			$router->post('/admin/tags/add', 'Admin\Tag#add');
			$router->get('/admin/tags/edit/:id', 'Admin\Tag#edit')->with('id', '[0-9]+');
			$router->post('/admin/tags/edit/:id', 'Admin\Tag#edit')->with('id', '[0-9]+');
			$router->post('/admin/tags/delete', 'Admin\Tag#delete');

			//ERROR
			$router->get('/error/404', 'Error\Error#notFound');
			$router->get('/error/403', 'Error\Error#forbidden');

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