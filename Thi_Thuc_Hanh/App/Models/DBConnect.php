<?php
namespace App\Models;

use PDO;
use PDOException;

class DBConnect {
    public $username;
    public $password;

    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function connect(){
        try{
            return new PDO('mysql:host=127.0.0.1;dbname=Supermaket_Manager',$this->username,$this->password);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}