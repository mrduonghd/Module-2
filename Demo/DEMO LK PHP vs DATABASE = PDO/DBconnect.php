<?php
class DBConnect {
    private $dsn;
    private $username;
    private $password;

    public function __construct($dbname)
    {
        $this->dsn = "mysql:host=localhost;dbname=".$dbname.";charset=utf8";
        $this->username = "root";
        $this->password = "Mr@duonghd1";
    }

    public function connect(){
        try{
            $conn = new PDO($this->dsn,$this->username,$this->password);
            return $conn;
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }
}