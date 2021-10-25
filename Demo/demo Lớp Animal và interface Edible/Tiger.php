<?php
class Tiger extends Animal {
    public $name;

    public function __construct($name)
    {
        $this ->name = $name;
    }

    public function makeSound($a){
        return $a;
    }
}