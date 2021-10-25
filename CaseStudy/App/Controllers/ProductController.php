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
        include_once 'Views/Products/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'Views/Products/add.php';
        } else {
            include_once 'Views/Products/add.php';

                $image = basename($_FILES['img']['name']);
                $target_dir = "../../public/image/";
                $target_file = $target_dir . $image;
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                // if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                //     echo "has been uploaded.";
                // } else {
                //     echo "Sorry, there was an error uploading your file.";
                // }

            $product = [
                'name' => $_POST['name'],
                'vendor' => $_POST['vendor'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'image' => $image
            ];
            $this->productModel->add($product);
            header("location:index.php");
        }
    }

    public function delete()
    {
        include_once 'Views/Products/delete.php';
        $id = $_GET['id'];
        $this->productModel->delete($id);
        header('location:index.php');
    }

    public function update()
    {
        $id = $_GET['id'];
        $product = $this->productModel->getById($id);
        include_once 'Views/Products/update.php';


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include_once 'Views/Products/update.php';

            $image = basename($_FILES['img']['name']);
            $target_dir = "../../public/image/";
            $target_file = $target_dir.$image;
            if (move_uploaded_file($_FILES['img']['tmp_name'],$target_file)) {
                echo "has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }

            $product = [
                'name' => $_POST['name'],
                'vendor' => $_POST['vendor'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'image' => $image
            ];
            $this->productModel->update($id, $product);

            header("location:index.php");
        }
    }

    public function viewDetail(){
        $id = $_GET['id'];
        $product = $this->productModel->getById($id);
        include_once 'Views/Products/detail.php';
    }
}
