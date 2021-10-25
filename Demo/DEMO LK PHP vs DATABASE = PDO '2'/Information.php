<?php
include_once 'Database.php';

class Information {
    public $pdo;
    public function __construct($db)
    {
        $database = new Database('root','Mr@duonghd1');
        $this->pdo = $database->connect($db);
    }

    public function getAll($table){
        $sql = "SELECT * FROM " . $table;
        $stmt = $this->pdo->prepare($sql);

        $stmt -> execute();
        $conn = $stmt->fetchAll();
        return $conn;
    }
}