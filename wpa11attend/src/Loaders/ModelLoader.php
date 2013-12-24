<?php 

class Model {
	public static function __callStatic($name, $arguments) {
		$data = require DD . "/app/models/" . $name . "s.php";
		if($arguments[0] == 'all') {
			return $data;
		}
	}
}

 ?>