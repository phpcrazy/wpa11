<?php 
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('home', 
	new Route('/',  array(
		'_controller'	=> 'HomeController::actionHome'
		)
	)
);

$routes->add('all-students', 
	new Route('/all-students', array(
		'_controller' => 'HomeController::allStudent'
		)
	)
);

$routes->add('detail', 
	new Route('/detail/{id}', array(
		'_controller' => 'HomeController::detailStudent',
		'id'	=> null
		)
	)
);

$routes->add('php-foundation', 
	new Route('/php-foundation', array(
		'_controller' => 'HomeController::phpFoundation'
		)
	)
);

$routes->add('php-advanced', 
	new Route('/php-advanced', array(
		'_controller'	=> 'HomeController::phpAdvanced'
		)
	)
);

$routes->add('wpa',
	new Route('/web-professional-advanced', array(
		'_controller'	=> 'ClassController::wpa'
		)
	)
);

return $routes;
 ?>