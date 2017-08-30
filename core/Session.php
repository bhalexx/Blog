<?php

	namespace Core;

	class Session {
		public function __construct() {
			session_start();
		}

		/*
		 * Sets CSRF token
		 */
		public function setToken($token) {
			print 'setToken';
			$_SESSION['token'] = $token;
		}

		/*
		 * Gets CSRF token
		 */
		public function getToken() {
			return $_SESSION['token'];
		}

		/*
		 * Sets flash feedback
		 */
		public function setFlash($message, $type = 'error') {
			$_SESSION['flash'] = array(
				'message' => $message,
				'type' => $type
			);
		}

		/*
		 * Gets flash feedback
		 */
		public function getFlash() {
			if (isset($_SESSION['flash'])) {
				$flash = $_SESSION['flash'];				
				unset($_SESSION['flash']);
				return $flash;
			}
		}
	}