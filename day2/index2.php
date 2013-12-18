<?php 

interface StudentInterface {
	public function getName();
	public function getAddress();
}

class Student implements StudentInterface {
	private $name;
	private $address;

	public function __construct($name, $address) {
		$this->name = $name;
		$this->address = $address;
	}

	public function getName() {
		return $this->name;
	}

	public function getAddress() {
		return $this->address;
	}
}

$student = new Student('Aung Aung', 'Hledan');
var_dump($student);

 ?>