<?php
class Database{
    public $username;
    public $password;

    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function connect($db){
        try{
            return new PDO('mysql:host=localhost;dbname='.$db.';charset=utf8',$this->username,$this->password);
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }
}

