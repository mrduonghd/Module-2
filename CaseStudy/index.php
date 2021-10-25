<?php
session_start();

$loginStatus = $_SESSION['isLogin'];
if (!isset($loginStatus) || !$loginStatus) {
    header('location:productview.php');
}

use App\Controllers\LoginController;
use App\Controllers\ProductController;
use App\Models\ProductModel;

require __DIR__ . '/vendor/autoload.php';
$productController = new ProductController;
$loginController = new LoginController();
$productModel = new ProductModel();
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
        include_once 'router.php';
    ?>
</body>

</html>