<?php
include_once "Animal.php";
include_once "Edible.php";
include_once "Chicken.php";
include_once "Tiger.php";
include_once "Fruit.php";
include_once "Orange .php";
include_once "Apple.php";

echo "<h1>Animals</h1>";
$animal1 = new Chicken("a");
echo "Ga: " . $animal1->makeSound("chip chip !!!") . "<br>";
$animal1->howToEat();
echo "<br><br>";

$animal2 = new Tiger("B");
echo $animal2->makeSound("Grrrr!!!") . "<br><br>";

echo "<h1>Fruit</h1>";
$cam = new Orange();
echo "cam: ";
$cam->howToEat();
echo "<br>";
$tao = new Apple();
echo "tao: ";
$tao->howToEat();


