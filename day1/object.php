<?php 
class Dog {
	private $leg;
	public $name;
	public function __construct($name, $leg = 4) {
		$this->leg = $leg;
		$this->name = $name;
	}
	function bark() {
		echo "Bark!";
	}
	public static function bite() {
		echo "Bite!";
	}
	function showleg() {
		echo $this->leg . " Idiot!";
	}
public static function __callStatic($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
}
	public function __call($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}
}

Dog::bite();
Dog::sleep('10');

$dog2 = new Dog('Aung Net');
$dog3 = new Dog('Puppy', 3);
echo $dog3->name;
echo $dog3->showleg();
$dog3->bark();
$dog3->eat('Bone');
$dog3->seed('Meat');

var_dump($dog2);
var_dump($dog3);
 ?>