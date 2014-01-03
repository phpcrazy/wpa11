<?php 

define('DD', __DIR__);
require DD . "/vendor/autoload.php";

$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
$app->get('/bye/:year/welcome/:newyear', function ($year, $newyear) {
	echo "Bye " . $year . " Welcome " . $newyear;
});
$app->run();

 ?>