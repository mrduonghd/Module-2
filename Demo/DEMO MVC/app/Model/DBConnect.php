<?php
namespace App\Model;
use PDO;
use PDOException;

class DBConnect {
    public $username;
    public $password;

    public function __construct($username,$password)
    {
        $this->username  = $username;
        $this->password = $password;
    }

    public function connect(){
        try{
            return new PDO("mysql:host=127.0.0.1;dbname=CustomersManager",$this->username,$this->password);
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }
}