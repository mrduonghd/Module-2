<?php

namespace App\Controller;

use App\Model\ProductModel;
use App\Model\CategoryModel;


class CategoryController
{
    protected $productModel;
    protected $categoryModel;

    public function __construct(){
        $this->categoryModel = new CategoryModel();
        $this->productModel = new ProductModel();
    }

    public function showCategories(){
        $categories = $this->categoryModel->getAllCategories();
        require "src/View/category/categories-list.php";
    }

    public function addCategory(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            require "src/View/category/add-category.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $categoryName = $_REQUEST['category_name'];
            $categoryWeb = $_REQUEST['category_web'];
            $categoryDes = $_REQUEST['category_des'];
            if (!empty($categoryName) && !empty($categoryWeb) && !empty($categoryDes)){
                $this->categoryModel->addCategory($categoryName,$categoryWeb,$categoryDes);
            }
            header("location:index.php?page=categories");
        }
    }

    public function deleteCategory(){
        $categoryId = (int)$_REQUEST['category_id'];
        if (!empty($categoryId)){
            $this->categoryModel->deleteCategory($categoryId);
        }
        header("location:index.php?page=categories");
    }
}