<?php

namespace App\Model;

use PDO;

class PublisherModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllPublishers(){
        $sql = "SELECT * FROM publishers";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }
}