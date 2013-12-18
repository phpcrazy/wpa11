<?php 
$name = $_GET['name'];
echo $name;

/*
$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

$script_name = str_replace('index.php', '', $script_name);
var_dump($script_name);
$request_uri = str_replace($script_name, '', $request_uri);
var_dump($request_uri);
$request = explode('/', $request_uri);
var_dump($request);
$type = $request[0];
$size = $request[1];
$item_id = $request[2];
$count = $request[3];
echo $type;
echo "Your order is " . $type . ' burger, size is ' . $size . ' and your item id is ' . $item_id . ' count is ' . $count;

*/
 ?>