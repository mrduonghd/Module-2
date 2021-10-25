<?php

class Employee {
    public $name;
    public $age;
    public $phone;

    public function __construct($name,$age,$phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function setName($newName){
        $this->name = $newName;
    }
    public function setAge($newAge){
        $this->age = $newAge;
    }
    public function setPhone($newPhone){
        $this->phone = $newPhone;
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getPhone(){
        return $this->phone;
    }
}