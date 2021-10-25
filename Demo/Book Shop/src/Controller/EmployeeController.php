<?php
namespace App\Controller;

use App\Model\EmployeeModel;

class EmployeeController
{
    protected $employeeModel;

    public function __construct(){
        $this->employeeModel = new EmployeeModel();
    }

    public function showEmployees(){
        $employees = $this->employeeModel->getAllEmployee();
        include "src/View/employee/employee-list.php";
    }

    public function addEmployee(){
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/View/employee/add-employee.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
//            $employeeId = (int)$_REQUEST['employee_id'];
            $employeeName = $_REQUEST['employee_name'];
            $employeePhone = $_REQUEST['employee_phone'];
            $employeeAddress = $_REQUEST['employee_address'];
            $employeeBirth = $_REQUEST['employee_birth'];
            $path = "images/";
            $tmpName = $_FILES['employee_image']['tmp_name'];
            $imageName = $_FILES['employee_image']['name'];
            move_uploaded_file($tmpName, $path.$imageName);
            if (!empty($employeeName) && !empty($employeePhone) && !empty($employeeAddress) && !empty($employeeBirth)){
                $this->employeeModel->addEmployee($employeeName,$employeeBirth,$employeePhone,$employeeAddress,$imageName);
            }
            header("location:index.php?page=employees");
        }
    }

    public function deleteEmployee(){
        $employeeId = (int)$_REQUEST['employee_id'];
        if (!empty($employeeId)){
            $this->employeeModel->deleteEmployee($employeeId);
        }
        header("location:index.php?page=employees");
    }

    public function updateEmployee(){
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $employeeId = $_REQUEST['employee_id'];
            $employee = $this->employeeModel->getEmployeeById($employeeId);
//            var_dump($employee);
            include "src/View/employee/update-employee.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $employeeId = (int)$_REQUEST['employee_id'];
            $employeeName = $_REQUEST['employee_name'];
            $employeePhone = $_REQUEST['employee_phone'];
            $employeeAddress = $_REQUEST['employee_address'];
            $employeeBirth = $_REQUEST['employee_birth'];
            $path = "images/";
            $tmpName = $_FILES['employee_image']['tmp_name'];
            $imageName = $_FILES['employee_image']['name'];
            move_uploaded_file($tmpName, $path.$imageName);
            if (empty($imageName)){
                $imageName = $_REQUEST['old_image'];
            }
            if (!empty($employeeId) && !empty($employeeName) && !empty($employeePhone) && !empty($employeeAddress)){
                $this->employeeModel->updateEmployee($employeeId,$employeeName,$employeeBirth,$employeePhone,$employeeAddress,$imageName);
            }
            header("location:index.php?page=employees");
        }
    }
}