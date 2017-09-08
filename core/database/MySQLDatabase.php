<?php

	namespace Core\Database;

	use \PDO;

	class MySQLDatabase extends Database {
		private $db_name;
		private $db_user;
		private $db_pass;
		private $db_host;
		private $pdo;

		public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost') {
			$this->db_name = $db_name;
			$this->db_user = $db_user;
			$this->db_pass = $db_pass;
			$this->db_host = $db_host;
		}

		/*
		 * Gets PDO
		 */
		private function getPDO() {
			if ($this->pdo === null) {
				$pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host, $this->db_user, $this->db_pass);
				// Throw an exception when an error occurs
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->pdo = $pdo;
			}
			
			return $this->pdo;
		}

		/*
		 * Executes dynamically query
		 */
		public function query($statement, $class_name = null, $one = false) {
			$req = $this->getPDO()->query($statement);
			
			if (
				strpos($statement, 'UPDATE') === 0 ||
				strpos($statement, 'INSERT') === 0 ||
				strpos($statement, 'DELETE') === 0
			) {
				return $req;
			}
			
			if ($class_name === null) {
				$req->setFetchMode(PDO::FETCH_OBJ);
			} else {
				$req->setFetchMode(PDO::FETCH_CLASS, $class_name);
			}
			
			if ($one) {
				$data = $req->fetch();
			} else {
				$data = $req->fetchAll();
			}

			return $data;
		}

		/*
		 * Executes query count
		 */
		public function queryCount($statement) {
			$req = $this->getPDO()->query($statement);
			$data = $req->fetchColumn();

			return $data;
		}

		/*
		 * Prepares query to execute
		 */
		public function prepare($statement, $attributes, $class_name = null, $one = false) {
			$req = $this->getPDO()->prepare($statement);
			$result = $req->execute($attributes);
			
			if (
				strpos($statement, 'UPDATE') === 0 ||
				strpos($statement, 'INSERT') === 0 ||
				strpos($statement, 'DELETE') === 0
			) {
				return $result;
			}

			if ($class_name === null) {
				$req->setFetchMode(PDO::FETCH_OBJ);
			} else {
				$req->setFetchMode(PDO::FETCH_CLASS, $class_name);
			}

			if ($one) {
				$data = $req->fetch();
			} else {
				$data = $req->fetchAll();
			}
			
			return $data;
		} 

		/*
		 * Gets last insert id
		 */
		public function lastInsertId() {
			return $this->getPDO()->lastInsertId();
		}
	}