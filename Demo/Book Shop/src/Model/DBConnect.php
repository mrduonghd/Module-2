<?php

namespace App\Model;
use PDO;

class DBConnect
{
    protected $dns;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dns = 'mysql:host=127.0.0.1;dbname=book_shop';
        $this->username = 'root';
        $this->password = 'Mr@duonghd1';
    }

    public function connect()
    {
        try {
            return new PDO($this->dns, $this->username, $this->password);
        }catch(\PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }
}