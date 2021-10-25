<?php
namespace App\Model;

class CustomerModel {
    public $pdo;

    public function __construct()
    {
        $database = new DBConnect('root','Mr@duonghd1');
        $this->pdo = $database->connect(); 
    }

    public function getAll(){
        $sql = "SELECT * FROM Customers";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function add($customer){
        $sql = "INSERT INTO Customers(name,email,address)
                VALUES(?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$customer['name']);
        $stmt->bindParam(2,$customer['email']);
        $stmt->bindParam(3,$customer['address']);
        $stmt->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM Customers 
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
    }

    public function getByID($id){
        $sql = "SELECT * FROM Customers 
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($id,$customer){
        $sql = "UPDATE Customers 
                SET name = ? , email = ? , address = ? 
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$customer['name']);
        $stmt->bindParam(2,$customer['email']);
        $stmt->bindParam(3,$customer['address']);
        $stmt->bindParam(4,$id);
        $stmt->execute();
    }
}