<?php 

	namespace Core\Model;

	use Core\Database\Database;

	class Model {
		protected $model;
		protected $db;

		public function __construct(Database $db) {
			$this->db = $db;
			if (is_null($this->model)) {
				$parts = explode('\\', get_class($this));
				$class_name = end($parts);
				$this->model = strtolower(str_replace('Model', '', $class_name));
			}
		}

		/*
		 * Creates new entry
		 */
		public function create($fields, $table = null) {
			$table = is_null($table) ? $this->model : $table;
			$attributes = [];
			$values = [];
			foreach ($fields as $key => $value) {
				$attributes[] = "$key = ?";
				$values[] = $value;
			}
			$sql_attributes = implode(', ', $attributes);
			return $this->query('INSERT INTO '.$table.' SET '.$sql_attributes, $values, true);
		}

		/*
		 * Updates entry
		 */
		public function update($id, $fields) {
			$attributes = [];
			$values = [];
			foreach ($fields as $key => $value) {
				$attributes[] = "$key = ?";
				$values[] = $value;
			}
			$values[] = $id;
			$sql_attributes = implode(', ', $attributes);
			return $this->query('UPDATE '.$this->model.' SET '.$sql_attributes.' WHERE id = ?', $values, true);
		}

		/*
		 * Deletes entry by id
		 */
		public function delete($id) {
			return $this->query('DELETE FROM '.$this->model.' WHERE id = ?', [$id], true);
		}

		/*
		 * Executes query or prepares query according by attributes
		 */
		public function query($statement, $attributes = null, $one = false) {
			//Prepared request if attributes
			if ($attributes) {
				return $this->db->prepare(
					$statement, 
					$attributes, 
					str_replace('Model', 'Entity', get_class($this)), 
					$one
				);
			} else {
				return $this->db->query(
					$statement, 
					str_replace('Model', 'Entity', get_class($this)), 
					$one
				);
			}
		}

		/*
		 * Executes query count
		 */
		public function queryCount($statement) {
			return $this->db->queryCount($statement);
		}

		/*
		 * Gets last insert id
		 */
		public function getLastInsertId() {
			return $this->db->lastInsertId();
		}
	}