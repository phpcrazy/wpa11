<?php 
use Symfony\Component\HttpFoundation\Request;

class HomeController {
	public function actionHome() {
		$request = Request::createFromGlobals();
		if(!$request->query->get('q')) {
			return View::make('home');
		} else {
			$q = htmlspecialchars($request->query->get('q'));
			$data['students'] = Student::search($q);
			return View::make('all-students', $data);
		}
	}

	public function detailStudent($id) {
		$data['students'] = Student::get($id);
		$data['scripts'] = Student::getInterests($id, 'script');
		$data['languages'] = Student::getInterests($id, 'language');
		$data['experiences'] = Student::getExperiences($id);
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