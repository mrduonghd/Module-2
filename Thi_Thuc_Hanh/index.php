<?php

use App\Controllers\ProductController;

require __DIR__ . '/vendor/autoload.php';
$productController = new ProductController();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $page = $_REQUEST['page'] ?? null;
    switch ($page) {
        case 'add':
            $productController->add();
            break;
        case 'delete':
            $productController->delete();
            break; 
        case 'update':
            $productController->update();
            break;
        case 'search':
            $productController->search();
            break;    
        default:
            $productController->index();
            break;
    }
    ?>
</body>

</html>