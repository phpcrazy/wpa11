<?php 

interface AnimalInterface{
	public function getName();
}

class Animal implements AnimalInterface{
	private $name;
	public function __construct($name){
		$this->name=$name;
	}
	public function getName(){
		return $this->name;
	}
}
interface Test{
	public function test();
}

class Dog extends Animal implements AnimalInterface, Test{
	public function test(){
		echo 'Test';
	}
}
class Male{
	public function __construct(){
		echo "Male Inheritance";
	}
}
class Female{
	public function __construct(){
		echo "Female Inheritance";
	}
}
class Human extends Male{
	public function __construct() {
		
	}
}
$human=new Human;
$animal = new Animal('Dog');
var_dump($animal);
$dog=new Dog('Aung Net');
$dog->test();
?>
