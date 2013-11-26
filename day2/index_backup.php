<?php 

class Animal {
	private $month;
	private $name;

	public static function test(){
		echo 'test';
	}

	public function __construct($name, $month) {
		$this->name = $name;
		$this->month = $month;
	}

	public function getName() {
		return $this->name;
	}

	public function getMonth() {
		return $this->month;
	}
}

class Dog extends Animal {
	private $color;
	function __construct($name, $month, $color)
	{

		parent::__construct($name, $month);
		$this->color=$color;
	}
	public function Bark($sound) {
		echo $sound;
	}
}

class Puppy extends Dog{
	public function Bark($sound){
		echo $sound;
	}
}

$puppy=new Puppy('Puppy', 3, 'red');
$puppy->Bark('Woooo');
class Cat extends Animal {
	public function Meow() {
		return "Meow!";
	}
}

Dog::test();
$dog = new Dog('Aung Net', 12, 'green');
$cat = new Cat('Me Me', 4);
echo $dog->getName();
var_dump($dog);
var_dump($cat);

$animal = new Animal('Bo Bo', 4);

echo 'Name is : ' . $animal->getName() . "<br />";
echo 'Months : ' . $animal->getMonth() . "<br />";


?>