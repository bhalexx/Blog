<?php
	
	namespace Core\Router;

	class Router {
		private $url;
		private $routes = [];
		private $namedRoutes = [];

		public function __construct($url) {
			$this->url = $url;
		}

		/*
		 * Get method
		 */
		public function get($path, $callable, $routeName = null) {
			return $this->add($path, $callable, $routeName, 'GET');
		}

		/*
		 * Post method
		 */
		public function post($path, $callable, $routeName = null) {
			return $this->add($path, $callable, $routeName, 'POST');
		}

		/*
		 * Adds route to named routes
		 * @return Route route
		 */
		private function add($path, $callable, $routeName, $method) {
			$route = new Route($path, $callable);
			$this->routes[$method][] = $route;	
			
			if (is_string($callable) && is_null($routeName)) {
				$routeName = $callable;
			}

			if ($routeName) {
				$this->namedRoutes[$routeName] = $route;
			}

			return $route;
		}

		/*
		 * Runs router with asked route
		 */
		public function run() {
			if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
				throw new RouterException('REQUEST_METHOD does not exist');
			}

			$askedRoute = '';
			foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
				if ($route->match($this->url)) {
					return $route->call();
				} else {
					$askedRoute = $route;
				}
			}

			throw new RouterException('No matching route '. $askedRoute->url);
		}

		/*
		 * Gets route URL
		 */
		public function url($routeName, $params = []) {
			if (!isset($this->namedRoutes[$routeName])) {
				throw new RouterException('No matching route with this name');
			}
			return $this->namedRoutes[$routeName]->getUrl($params);
		}
	}