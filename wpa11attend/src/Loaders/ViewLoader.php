<?php 
use Symfony\Component\HttpFoundation\Response;

class View {
	public static function make($view, $values = null) {
		$file = DD . "/app/views/" . $view . ".php";
		if(file_exists($file)) {
			ob_start();
			if($values != null) {
				extract($values);
			}
			require $file;
			$response = new Response(ob_get_clean());
			$response->send();
		} else {
			trigger_error("Your view file doesn't exist", E_USER_ERROR);
		}
	}

	public static function notFound() {
		ob_start();
		require DD . '/app/views/404.php';
		$response = new Response(ob_get_clean(), 404);
		$response->send();
	}
}

 ?>