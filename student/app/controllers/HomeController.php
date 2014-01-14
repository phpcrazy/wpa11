<?php 

class HomeController {

	public function actionHome() {
		return View::make('home');
	}

	public function detailStudent($id) {
		$data['students'] = Student::get($id);
		return View::make('detail', $data);
	}

	public function allStudent() {
		$data['students'] = Student::all();
		return View::make('all-students', $data);
	}

	public function phpFoundation() {
		$class ='PHP Foundation';
		$data['students']=Student::getClass($class);
		return View::make('all-students', $data);
	}

	public function phpAdvanced() {
		$class ='PHP Advanced';
		$data['students']=Student::getClass($class);
		return View::make('all-students', $data);	
	}
}

 ?>