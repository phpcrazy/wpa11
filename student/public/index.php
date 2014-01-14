<?php

define('DD', __DIR__ . '/../'); 
require DD . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$request = Request::createFromGlobals();
$routes = new RouteCollection();

$routes->add('home', new Route('/', 
	array(
		'_controller'	=> 'HomeController@actionHome'
	)));
$routes->add('all-students', new Route('/all-students', 
	array(
		'_controller' => 'HomeController@allStudent'
		)));
$routes->add('detail', new Route('/detail/{id}', 
	array(
		'_controller' => 'HomeController@detailStudent',
		'id'	=> null)));
$routes->add('php-foundation', new Route('/php-foundation', array(
	'_controller'	=> 'HomeController@phpFoundation'
	)));
$routes->add('php-advanced', new Route('/php-advanced', array(
	'_controller'	=> 'HomeController@phpAdvanced'
	)));

$routes->add('class', new Route('/class/{name}/mgmg/{id}', array(
	'_controller' => 'ClassController@actionIndex',
	'name'	=> null,
	'id'	=> null,
	)));

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

try {
	$request->attributes->add($matcher->match($request->getPathInfo()));
	extract($request->attributes->all());
	$control = explode('@', $_controller);
	$ctl = new $control[0];
	if(isset($id) && isset($name)) {
		$get_response = call_user_func_array(
			array($ctl, $control[1]), 
			array('id'	=> $id)
		);	
	} else {
		$get_response = call_user_func(
			array($ctl, $control[1])
		);
	}
	$response = new Response($get_response);

	// switch($_route) {
	// 	case "home": 
	// 		$get_response = View::make('home');
	// 		$response = new Response($get_response);
	// 		break;
	// 	case "all-students":
	// 		$data['students'] = Student::all();
	// 		$get_response = View::make('all-students', $data);
	// 		$response = new Response($get_response);
	// 		break; 
	// 	case "detail":
	// 		if(isset($id)) {
	// 			$data['students'] = Student::get($id);
	// 			$get_response = View::make('detail', $data);
	// 			$response = new Response($get_response);
	// 			break;	
	// 		} else {
	// 			$get_response = View::make('404');
	// 			$response = new Response($get_response, 404);
	// 			break;
	// 		}
	// 	case "php-foundation":
	// 		$class ='PHP Foundation';
	// 		$data['students']=Student::getClass($class);
	// 		$get_response = View::make('all-students', $data);
	// 		$response = new Response($get_response);
	// 		break;
	// 	case "php-advanced":
	// 		$class = 'PHP Advanced';
	// 		$data['students']=Student::getClass($class);
	// 		$get_response = View::make('all-students', $data);
	// 		$response = new Response($get_response);
	// 		break;
	// }
	
} catch (Routing\Exception\ResourceNotFoundException $e) {
	$get_response = View::make('404');
	$response = new Response($get_response, 404);
} catch (Exception $e) {
	$response = new Response('An error occured!', 500);
}

$response->send();


/* $sitetitle = Config::get('site_title');
echo $sitetitle . "<br />";
$foobar = Config::get('foo.bar.moo');
echo $foobar;*/


// $data['site_title']	= Config::get('site_title');

// URI Request
/*
$request_uri = htmlspecialchars($_SERVER['REQUEST_URI']);
$script_name = $_SERVER['SCRIPT_NAME'];
$request_uri = explode('/', $request_uri);
$script_name = explode('/', $script_name);
$script_request = array_diff($request_uri, $script_name);
if(empty($script_request)) {
	$result = array( 0 => '' );
} else {
	$result = array_values($script_request);
}

switch($result[0]) {
	case "all-students":
		$data['students'] = Student::all();
		View::make('all-students', $data);
		break; 
	case "detail":
		if(isset($result[1])) {
			$data['students'] = Student::get($result[1]);
			View::make('detail', $data);
			break;	
		} else {
			View::make('404');
			break;
		}
	case "php-foundation":
		$result[0]='PHP Foundation';
		$data['students']=Student::getClass($result[0]);
		View::make('all-students',$data);
		break;
	case "php-advanced":
		$result[0]='PHP Advanced';
		$data['students']=Student::getClass($result[0]);
		View::make('all-students',$data);
		break;
	case "":
		View::make('home');
		break;
	default:
		View::make('404');
}
*/
/*
// Get request 

$page = isset($_GET['page']) ? $_GET['page'] : '';
$page = htmlspecialchars($page);

switch($page) {
	case "all-students":
		$data['students'] = Student::all();
		View::make('all-students', $data);
		break;
	case "detail":
		$data['students'] = Student::get(htmlspecialchars($_GET['id']));
		View::make('detail', $data);
		break;
	case "php-foundation":
		$page='PHP Foundation';
		$data['students']=Student::getClass($page);
		View::make('all-students',$data);
		break;
	case "php-advanced":
		$page='PHP Advanced';
		$data['students']=Student::getClass($page);
		View::make('all-students',$data);
		break;
	case "":
		View::make('home', $data);
		break;
	default:
		View::make('404', $data);
}
*/

/*
if($page == 'all-students') {
	$data['students'] = Student::all();
	View::make('all-students', $data);
} elseif($page=='detail') {
	$data['students'] = Student::get(htmlspecialchars($_GET['id']));
	View::make('detail', $data);
}elseif($page=='php-foundation'){
	$page='PHP Foundation';
	$data['students']=Student::getClass($page);
	View::make('all-students',$data);
}elseif ($page=='php-advanced'){
	$page='PHP Advanced';
	$data['students'] = Student::getClass($page);
	View::make('all-students', $data);
} else {
	View::make('home', $data);
}
*/
?>