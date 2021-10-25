<?php
namespace App\Model;

class UserModel {
    public $pdo;

    public function __construct()
    {
        $database = new DBConnect('root','Mr@duonghd1');
        $this->pdo = $database->connect(); 
    }

    public function checkAccount($email,$password){
        $sql = "SELECT COUNT(id) as 'SL' FROM users 
                WHERE  email = :email AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}