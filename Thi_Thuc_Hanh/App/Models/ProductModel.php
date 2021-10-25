<?php
namespace App\Models;

class ProductModel {
    public $pdo;

    public function __construct()
    {
        $database = new DBConnect('root','Mr@duonghd1');
        $this->pdo = $database->connect();
    }

    public function getAll(){
        $sql = "SELECT * FROM Products";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function add($arr){
        $sql = "INSERT INTO Products(pName,pType,buyPrice,quantity,dateCreated,description)
                VALUES(?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$arr['name']);
        $stmt->bindParam(2,$arr['type']);
        $stmt->bindParam(3,$arr['price']);
        $stmt->bindParam(4,$arr['quantity']);
        $stmt->bindParam(5,$arr['date']);
        $stmt->bindParam(6,$arr['description']);
        $stmt->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM Products
                WHERE pCode = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
    }

    public function getById($id){
        $sql = "SELECT * FROM Products 
                WHERE pCode = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($id,$arr){
        $sql = "UPDATE Products 
                SET pName = ? , pType = ? , buyPrice = ? , quantity = ? , dateCreated = ? , description = ? 
                WHERE pCode = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$arr['name']);
        $stmt->bindParam(2,$arr['type']);
        $stmt->bindParam(3,$arr['price']);
        $stmt->bindParam(4,$arr['quantity']);
        $stmt->bindParam(5,$arr['date']);
        $stmt->bindParam(6,$arr['description']);
        $stmt->bindParam(7,$id);
        $stmt->execute();
    } 

    public function search($search){
        $sql = "SELECT * FROM Products 
                WHERE pName LIKE '%$search%'";
        $stmt = $this->pdo->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
}