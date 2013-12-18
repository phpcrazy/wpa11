<?php 
define('DD', __DIR__);
define('CONFIG_RD', __DIR__ . "/config/");

require __DIR__ . '/vendor/autoload.php';

$site_title = Config::config('site_title');
$boo = Config::config('goo.boo');
$moo = Config::config('foo.bar.moo');
dump($site_title);
echo $site_title . "<br />";
echo $boo . "<br />";
echo $moo . "<br />";


?>