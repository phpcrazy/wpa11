<?php 

function arrayResolver($request_array, $default_array) {
	$key = explode('.', $request_array[0]);
	foreach ($key as $k => $value) {
		$default_array = $default_array[$value];
	}
	return $default_array;    
}
function dump($value,$state=false)
{
	if($state==true){
		var_dump($value);
		die();
	}
	var_dump($value);
}
 ?>

