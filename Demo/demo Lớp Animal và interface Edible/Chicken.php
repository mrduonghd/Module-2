<?php
class Chicken extends Animal implements Edible {
    public $name;

    public function __construct($name)
    {
        $this ->name = $name;
    }

    public function makeSound($a){
        return $a;
    }

    public function howToEat()
    {
        echo "chat ra roi ran";
    }
}