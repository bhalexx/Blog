<?php

	namespace App;

	class Session {
		public function __construct() {
			session_start();
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