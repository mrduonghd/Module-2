<?php

namespace App\Model;

use PDO;

class CustomerModel
{
    protected $database;

    public function __construct(){
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCustomer(){
        $sql = "SELECT*FROM customers";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
}
