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
        $sql = "INSERT INTO Products(pName,pVendor,pDescription,buyPrice,image)
                VALUES(?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$arr['name']);
        $stmt->bindParam(2,$arr['vendor']);
        $stmt->bindParam(3,$arr['description']);
        $stmt->bindParam(4,$arr['price']);
        $stmt->bindParam(5,$arr['image']);
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
                SET pName = ? , pVendor = ? , pDescription = ? , buyPrice = ? , image = ?  
                WHERE pCode = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$arr['name']);
        $stmt->bindParam(2,$arr['vendor']);
        $stmt->bindParam(3,$arr['description']);
        $stmt->bindParam(4,$arr['price']);
        $stmt->bindParam(5,$arr['image']);
        $stmt->bindParam(6,$id);
        $stmt->execute();
    } 
    
}