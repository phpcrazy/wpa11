

<?php 


require_once __DIR__ . "/vendor/autoload.php";

$app = new Silex\Application();

$app->get('/', function(){
	return "Hello World!";
});

$app->get('/test', function(){
	return "Testing!";
});

$app->run();


 ?>