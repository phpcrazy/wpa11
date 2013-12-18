<?php 

define('DD', __DIR__);

function __autoload($classname) {
	var_dump($classname);
	$filename = DD . '/class/' . $classname . ".php";
	var_dump($filename);
	if(is_readable($filename)) {
		require $filename;
	}
}

$cat = new Cat;
$dog = new Dog;

/*
function autoloadModel($className) {
	$filename = DD . "/models/" . $className . ".php";
	if (is_readable($filename)) {
		require $filename;
	}
}
function autoloadController($className) {
	$filename = DD . "/controllers/" . $className . ".php";
	if (is_readable($filename)) {
		require $filename;
	}
}
function autoloadClass($classname) {
	$filename = DD . "/class/" . $classname . ".php";
	if(is_readable($filename)) {
		require $filename;
	}
}

spl_autoload_register('autoloadController');
spl_autoload_register('autoloadModel');
spl_autoload_register('autoloadClass');

$dog = new DogController;
$cat = new CatModel;
$newcat = new Cat;
*/
?>