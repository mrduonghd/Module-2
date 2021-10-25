<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once 'Views/list.php';
    }

    public function search(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            include_once 'Views/search.php';
            $name = $_POST['pname'];
            $this->productModel->search($name);
        }
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'Views/add.php';
        } else {
            include_once 'Views/add.php';

            $product = [
                'name' => $_POST['name'],
                'type' => $_POST['type'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
                'date' => $_POST['date'],
                'description' => $_POST['description'],
            ];

            $this->productModel->add($product);
            header("location:index.php");
        }
    }

    public function delete()
    {
        include_once 'Views/delete.php';
        $id = $_GET['id'];
        $this->productModel->delete($id);
        header('location:index.php');
    }

    public function update()
    {
        $id = $_GET['id'];
        $product = $this->productModel->getById($id);
        include_once 'Views/update.php';


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include_once 'Views/Products/update.php';

            $product = [
                'name' => $_POST['name'],
                'type' => $_POST['type'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
                'date' => $_POST['date'],
                'description' => $_POST['description'],
            ];

            $this->productModel->update($id, $product);

            header("location:index.php");
        }
    }
}
