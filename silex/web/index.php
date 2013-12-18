<?php 

require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application(); 

$app->get('/cheese/single/2/45', function(){
	return "Hello!";
});

$app->run(); 

 ?>