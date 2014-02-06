<?php 
class MongoController {
	public function actionIndex() {
		return View::make('home');
	}
	public function allstudents() {
		$data['students'] = mStudent::getData();
		return View::make('all-students', $data);
	}

	public function phpAdvanced() {
		$data['students'] = mStudent::getAdvanced();
		return View::make('all-students', $data);
	}

	public function phpFoundation() {
		$data['students'] = mStudent::getFoundation();
		return View::make('all-students', $data);
	}

	public function detail($id) {
		$data['students'] = mStudent::detail($id);
		return View::make('detail', $data);
	}

}

?>