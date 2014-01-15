<?php 

class ClassController {
	public function actionIndex($name, $id) {
		echo $name;
		echo $id;
		return View::make('home');
	}

	public function actionWpf() {
		return View::make('class_wpf');
	}

	public function wpa() {
		$data['foo'] = ClassMe::all();
		return View::make('class/index', $data);
	}
}

 ?>