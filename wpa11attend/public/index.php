<?php 
define('DD', __DIR__ . '/../');
define('CONFIG_RD', DD . "/app/config/");

require DD . '/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$pathinfo = $request->getPathInfo();
$pathinfo = explode('/', $pathinfo);

if($pathinfo[1] == '') {
	$data['members'] = Model::member('all');
	View::make('home', $data);	
} else if($pathinfo[1] == 'blog') {
	$data['test']	= 'Hell World';
	View::make('blog', $data);
} else {
	View::notFound();
}
?>