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
    case 'logout':
        $loginController->logout();
        break;
    case 'detail':
        $productController->viewDetail();
        break;
    default:
        $productController->index();
        break;
}
