<?php 
define('DD', __DIR__ . '/../');
define('CONFIG_RD', DD . "/app/config/");

require DD . '/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;

$request = Request::createFromGlobals();

$routes = new RouteCollection();
$routes->add('hello', new Route('/hello/{name}', array('name' => 'World')));
$routes->add('bye', new Route('/bye'));
$routes->add('test', new Route('/test/{name}', array('name' => 'Thiha')));

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);
try {
	$result = $matcher->match($request->getPathInfo());
	ob_start();
	extract($result);
	call_user_func($_route, $name);
	$response = new Response(ob_get_clean());
} catch(Routing\Exception\ResourceNotFoundException $e) {
	$response = new Response('Not Found', 404);
} catch(Exception $e) {
	$response = new Response('An error occured!', 500);
}
$response->send();

function hello($name) {
	echo "Hello " . $name;
}

?>