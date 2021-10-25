<?php

namespace App\Model;
use PDO;

class CategoryModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCategories(){
        $sql = "SELECT * FROM categories";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCategory($categoryName, $categoryWeb, $categoryDes){
        $sql = "INSERT INTO categories(category_name,category_des,link) VALUES (:category_name,:category_des,:link)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':category_name',$categoryName);
        $stmt->bindParam(':category_des',$categoryDes);
        $stmt->bindParam(':link',$categoryWeb);
        $stmt->execute();
    }

    public function deleteCategory($categoryId){
        $sql = "DELETE FROM categories WHERE category_id=:category_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':category_id',$categoryId);
        $stmt->execute();
    }
}