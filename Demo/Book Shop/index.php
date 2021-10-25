<?php

ob_start();

use App\Controller\ProductController;
use App\Controller\AuthorController;
use App\Controller\CategoryController;
use App\Controller\EmployeeController;
use App\Controller\OrderController;

require __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
$productController = new ProductController();
$authorController = new AuthorController();
$categoryController = new CategoryController();
$employeeController = new EmployeeController();
$orderController = new OrderController();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Document</title>
</head>
<body>

<!--           bootstrap         -->
<div class="container container-fluid">

<!--              my-content-->
        <div class="row my-content col" >

            <?php
            switch ($page){
                case 'book-details':
                    $productController->showBookDetails();
                    break;
                case 'books-table':
                    $productController->showBooksTable();
                    break;
                case 'add-book':
                    $productController->addBook();
                    break;
                case 'update-book':
                    $productController->updateBook();
                    break;
                case 'delete-book':
                    $productController->deleteBook();
                    break;
                case 'authors':
                    $authorController->showAuthors();
                    break;
                case 'add-author':
                    $authorController->addAuthor();
                    break;
                case 'author-details':
                    $authorController->showAuthorDetail();
                    break;
                case 'delete-author':
                    $authorController->deleteAuthor();
                    break;
                case 'update-author':
                    $authorController->updateAuthor();
                    break;
                case 'publishers':
                    $productController->showPublishers();
                    break;
                case 'categories':
                    $categoryController->showCategories();
                    break;
                case 'add-category':
                    $categoryController->addCategory();
                    break;
                case 'delete-category':
                    $categoryController->deleteCategory();
                    break;
                case 'employees':
                    $employeeController->showEmployees();
                    break;
                case 'add-employee':
                    $employeeController->addEmployee();
                    break;
                case 'delete-employee':
                    $employeeController->deleteEmployee();
                    break;
                case 'update-employee':
                    $employeeController->updateEmployee();
                    break;
                case 'orders-list':
                    $orderController->getAllOrder();
                    break;
                case 'create-order':
                    $orderController->createOrder();
                    break;
                case 'delete-order':
                    $orderController->deleteOrderById();
                    break;
                case 'order-details':
                    $orderController->getOrderDetailById();
                    break;
                default:
                    $productController->showBookList();
                    break;
            }
            ob_end_flush();
            ?>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>

</body>
</html>
