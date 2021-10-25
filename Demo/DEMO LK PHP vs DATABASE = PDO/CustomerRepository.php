<?php
include_once "DBconnect.php";
class CustomerRepository{
    private $dbConnect;
    protected $table;

    public function __construct($db,$table)
    {
        $this->dbConnect = new DBConnect($db);
        $this->table = $table;
    }

    public function getAllStudent(){
        $sql = "SELECT * FROM " . $this->table;
        $statement = $this->dbConnect->connect()->query($sql);
        return $statement->fetchAll();
    }
}