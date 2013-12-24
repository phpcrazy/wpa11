<?php 
define('DD', __DIR__ . '/../');
define('CONFIG_RD', DD . "/app/config/");

require DD . '/vendor/autoload.php';


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// $request = Request::createFromGlobals();
ob_start();
$members = Model::member('all');
require DD . '/app/views/home.php';
$response = new Response(ob_get_clean());
$response->send();


?>