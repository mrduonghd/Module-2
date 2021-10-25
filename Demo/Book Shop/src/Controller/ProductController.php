<?php

namespace App\Controller;

use App\Model\AuthorModel;
use App\Model\ProductModel;
use App\Model\PublisherModel;
use App\Model\CategoryModel;

class ProductController
{
    protected $productModel;
    protected $publisherModel;
    protected $categoryModel;
    protected $authorModel;
    protected $pagination;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->publisherModel = new PublisherModel();
        $this->categoryModel = new CategoryModel();
        $this->authorModel = new AuthorModel();
    }

    public function showBooksTable(){
        $books = $this->productModel->productList();
        include 'src/View/book/books-table.php';
    }

    public function showBookList()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $count = $this->productModel->productCountRecord();
            $totalRecord = (int)$count[0]['total_record'];
            $currentPage = isset($_REQUEST['pagination']) ? $_REQUEST['pagination'] : 1;
            $limit = 12;
            $paramPage = 'index.php?page=pagination';
            $this->pagination = new PaginationController($currentPage,$limit,$totalRecord,3,$paramPage);
            $data = $this->pagination->showPagination();

            $start = $this->pagination->getStart();
            $products = $this->productModel->productBookLimit($start,$limit);
            include 'src/View/book/book-list.php';
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $searchName = $_POST['search_name'];
            if (isset($searchName) && $searchName != null){
                $products = $this->productModel->searchBooks($searchName);
                if ($products != null){
                    include 'src/View/book/book-list.php';
                }else{
                    header("location:index.php");
                }
            }
        }
    }

    public function addBook(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $authors = $this->authorModel->getAllAuthors();
            $publishers = $this->publisherModel->getAllPublishers();
            $categories = $this->categoryModel->getAllCategories();
            include "src/View/book/add-book.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $isbn = $_POST['isbn'];
            $bookName = $_POST['book_name'];
            $authorId = (int)$_POST['author_id'];
            $categoryId = (int)$_POST['category_id'];
            $publisherId = (int)$_POST['publisher_id'];
            $quantity = (int)$_POST['quantity'];
            $publicationDate = $_POST['date_of_publication'];
            $priceSale = (int)$_POST['price_sale'];
            $pageNumber = (int)$_POST['page_number'];
            $description = $_POST['description'];
            $updateDate = $_POST['update_date'];
            $path = "images/";
            $tmpName = $_FILES['image']['tmp_name'];
            $imageName = $_FILES['image']['name'];
            move_uploaded_file($tmpName, $path.$imageName);
            $this->productModel->addBook($isbn,$bookName,$description,$pageNumber,$authorId,$categoryId,$publisherId,$quantity,$publicationDate,$updateDate,$priceSale,$imageName);
            header("location:index.php");
        }
    }
    public function deleteBook(){
        $id = $_REQUEST['id'];
        $this->productModel->deleteBook($id);
        $this->showBookList();
    }

    public function updateBook(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = (int)$_REQUEST['id'];
            $product = $this->productModel->productDetails($id);
            $categories = $this->categoryModel->getAllCategories();
            $publishers = $this->publisherModel->getAllPublishers();
            $authors = $this->authorModel->getAllAuthors();
            include "src/View/book/update-book.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $bookId = (int)$_REQUEST['book_id'];
            $isbn = $_REQUEST['isbn'];
            $bookName = $_REQUEST['book_name'];
            $description = $_REQUEST['description'];
            $pageNumber = $_REQUEST['page_number'];
            $authorId = (int)$_REQUEST['author_id'];
            $categoryId = (int)$_REQUEST['category_id'];
            $publisherId = (int)$_REQUEST['publisher_id'];
            $quantity= (int)$_REQUEST['quantity'];
            $publicationDate= $_REQUEST['date_of_publication'];
            $updateDate= $_REQUEST['update_date'];
            $priceSale= $_REQUEST['price_sale'];
            $imageName = $_FILES['image']['name'];
            $path = "images/";
            $tmpName = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmpName, $path.$imageName);
            if (!empty($bookName) && !empty($isbn) && !empty($authorId) && !empty($priceSale) && !empty($publicationDate)){
                if ($imageName == null){
                    $imageName = $_REQUEST['old_image'];
                }

                $this->productModel->updateBook($bookId,$isbn,$bookName,$description,$pageNumber,$authorId,$categoryId,$publisherId,$quantity,$publicationDate,$updateDate,$priceSale,$imageName);
            }
            header("location:index.php");

        }
    }

    public function showBookDetails(){
        $id = (int)$_REQUEST['id'];
        if (isset($id) && is_integer($id)){
            $products = $this->productModel->productDetails($id);
            include "src/View/book/book-details.php";
        }
    }

    /**     Publisher       */
    public function showPublishers(){
        $publishers = $this->publisherModel->getAllPublishers();
        include "src/View/publisher/publisher-list.php";
    }

}