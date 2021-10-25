<?php
namespace App\Models;

use App\Models\DBConnect;

class UserModel {
    public $pdo;

    public function __construct()
    {
        $database = new DBConnect('root','Mr@duonghd1');
        $this->pdo = $database->connect(); 
    }

    public function checkAccount($name,$password){
        $sql = "SELECT COUNT(id) as 'SL' FROM users 
                WHERE  name = :name AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}