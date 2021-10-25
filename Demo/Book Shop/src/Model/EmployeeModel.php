<?php

namespace App\Model;

use PDO;

class EmployeeModel
{
    protected $database;

    public function __construct(){
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllEmployee(){
        $sql = "SELECT * FROM `employees` ORDER BY employee_id DESC";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function addEmployee($employeeName,$employeeBirth,$employeePhone,$employeeAddress,$image){
        $sql = "INSERT INTO employees(employee_name,bithday,employee_address,employee_phone,image) VALUES (:employee_name,:bithday,:employee_address,:employee_phone,:image)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':employee_name',$employeeName);
        $stmt->bindParam(':bithday',$employeeBirth);
        $stmt->bindParam(':employee_address',$employeeAddress);
        $stmt->bindParam(':employee_phone',$employeePhone);
        $stmt->bindParam(':image',$image);
        $stmt->execute();
    }

    public function deleteEmployee($employeeId){
        $sql = "DELETE FROM employees WHERE employee_id =:employee_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':employee_id',$employeeId);
        $stmt->execute();
        var_dump($stmt->execute());
    }

    public function getEmployeeById($employeeId){
        $sql = "SELECT*FROM employees WHERE employee_id =:employee_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':employee_id',$employeeId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateEmployee($employeeId,$employeeName,$employeeBirth,$employeePhone,$employeeAddress,$image){
        $sql = "UPDATE employees SET employee_name =:employee_name,bithday =:bithday,employee_address=:employee_address,employee_phone=:employee_phone,image=:image WHERE employee_id=:employee_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':employee_id',$employeeId);
        $stmt->bindParam(':employee_name',$employeeName);
        $stmt->bindParam(':bithday',$employeeBirth);
        $stmt->bindParam(':employee_address',$employeeAddress);
        $stmt->bindParam(':employee_phone',$employeePhone);
        $stmt->bindParam(':image',$image);
        $stmt->execute();
    }
}