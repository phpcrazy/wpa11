<?php 
namespace Wpa11;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;

class Application {
	public $request;
	private $routes;
	private $context;
	private $matcher;
	private $resolver;

	public function __construct() {
		$this->request = Request::createFromGlobals();
		$this->routes = include DD . '/app/routes.php';
		$this->context = new RequestContext();
		$this->context->fromRequest($this->request);
		$this->matcher = new UrlMatcher($this->routes, $this->context);
		$this->resolver = new ControllerResolver();
	}

	public function handle() {
		try {
			$this->request->attributes->add(
				$this->matcher->match($this->request->getPathInfo())
				);
			$controller = $this->resolver->getController($this->request);
			$arguments = $this->resolver->getArguments($this->request, $controller);
			$get_response = call_user_func_array($controller, $arguments);
			return new Response($get_response);	
		} catch (Routing\Exception\ResourceNotFoundException $e) {
			$get_response = View::make('404');
			return new Response($get_response, 404);
		} catch (Exception $e) {
			return new Response('An error occured!', 500);
		}
	}
}

 ?>