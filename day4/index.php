<?php 

require __DIR__ . '/class/Dog.php';
require __DIR__ . '/controllers/Dog.php';

use Puppy\Dog as PuppyDog;
use Puggie\Dog as PuggieDog;

$dog = new PuppyDog;
$newdog = new PuggieDog;

 ?>