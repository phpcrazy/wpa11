<?php 

class DatabaseLoader {
	private $default_database;
	public function __construct() {
		$this->default_database = Config::database('default');
	}

	public function loadDatabase($default = null) {
		if($default == null) {
			if($this->default_database == 'mongo') {
				return $this->MongoConnect();
			} elseif ($this->default_database == 'mysql') {
				return $this->MySqlConnect();
			}
		} elseif($default == 'mongo') {
			return $this->MongoConnect();
		} elseif($default == 'mysql') {
			return $this->MySqlConnect();
		}
	}

	private function MongoConnect() {
		return new MongoClient();
	}

	private function MySqlConnect() {

	}
}

 ?>