<?php 

class mStudent {

	public static function insertData() {
		$dbloader = new DatabaseLoader();
		$conn = $dbloader->loadDatabase();
		$db = $conn->StudentInfo;
		$collection = $db->students;
		$data = require DD . '/app/data/student_mla.php';
		foreach($data as $student) {
			$collection->insert($student);
		}
		$newdata = require DD . "/app/data/student_mlh.php";
		foreach($newdata as $student) {
			$collection->insert($student);
		}

	}

	public static function getData() {
		// $dbloader = new DatabaseLoader();
		// $conn = $dbloader->loadDatabase();
		$conn = new MongoConnect();
		$db = $conn->StudentInfo;
		$collection = $db->students;
		$cursor = $collection->find()->limit(10);
		return $cursor;
	}

	public static function getAdvanced() {
		$dbloader = new DatabaseLoader();
		$conn = $dbloader->loadDatabase();
		$db = $conn->StudentInfo;
		$collection = $db->students;
		$cursor = $collection->find(array('class' => 'PHP Advanced'));
		return $cursor;
	}

	public static function getFoundation() {
		$dbloader = new DatabaseLoader();
		$conn = $dbloader->loadDatabase();
		$db = $conn->StudentInfo;
		$collection = $db->students;
		$cursor = $collection->find(array('class' => 'PHP Foundation'));
		return $cursor;
	}

	public static function detail($id) {
		$dbloader = new DatabaseLoader();
		$conn = $dbloader->loadDatabase();
		$db = $conn->StudentInfo;
		$collection = $db->students;
		$cursor = $collection->findOne(array("_id" => new MongoId($id)));
		return $cursor;	
	}


}

 ?>