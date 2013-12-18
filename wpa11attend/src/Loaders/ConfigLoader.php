<?php 
class Config {
	public static function __callStatic($name, $argument) {
		return static::configCheck($name, $argument);	
	}

	protected static function configCheck($name, $argument) {
		$config_values = require CONFIG_RD . $name . '.php';
		return $key = arrayResolver($argument, $config_values);				
	}
}
?>