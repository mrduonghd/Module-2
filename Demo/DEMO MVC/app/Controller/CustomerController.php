<?php

namespace App\Controller;

use App\Model\CustomerModel;

class CustomerController
{
    public $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function index()
    {
        $customers = $this->customerModel->getAll();
        include_once 'app/View/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'app/View/add.php';
        } else {
            include_once 'app/View/add.php';
            $customer = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'address' => $_POST['address']
            ];
            $this->customerModel->add($customer);
            header('location:index.php');
        }
    }

    public function delete()
    {
        include_once 'app/View/delete.php';
        $id = $_GET['id'];
        $this->customerModel->delete($id);
        header('location:index.php');
    }

    public function update()
    {
        
        $id = $_GET['id'];
        $customer = $this->customerModel->getByID($id);
        include_once 'app/View/update.php';


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include_once 'app/View/update.php';

            $customer = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'address' => $_POST['address']
            ];
            $this->customerModel->update($id, $customer);

            header('location:index.php');
        }
    }
}
