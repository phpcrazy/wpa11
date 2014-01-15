<?php

define('DD', __DIR__ . '/../');  // Main activity

require DD . '/vendor/autoload.php';

use Wpa11\Application;

$app = new Application();

$response = $app->handle();
$response->send();
unset($app);

?>