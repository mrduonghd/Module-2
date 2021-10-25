<?php
namespace App\Controller;

use App\Model\AuthorModel;
use App\Model\ProductModel;

class AuthorController
{
    protected $productModel;
    protected $authorModel;

    public function __construct(){
        $this->authorModel = new AuthorModel();
        $this->productModel = new ProductModel();
    }

    public function showAuthors(){
            $authors = $this->authorModel->getAllAuthors();
//            var_dump($authors);
            include "src/View/author/authors-list.php";
    }

    public function showAuthorDetail(){
        $id = (int)$_REQUEST['author_id'];
//        echo "<pre>";
        $author = $this->authorModel->getAuthorById($id);
        $authorBooks = $this->productModel->getBookByAuthorId($id);
//        var_dump($authorBooks);
        include "src/View/author/author-details.php";
//        var_dump($author);
    }

    public function addAuthor(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            require "src/View/author/add-author.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $authorName = $_REQUEST['author_name'];
            $authorDeath = $_REQUEST['birth_death'];
            $website = $_REQUEST['author_website'];
            $authorDes = $_REQUEST['author_des'];
            $path = "images/";
            $tmpName = $_FILES['author_image']['tmp_name'];
            $imageName = $_FILES['author_image']['name'];
            move_uploaded_file($tmpName, $path.$imageName);

            if (!empty($authorName) && !empty($imageName) && !empty($authorDes)){
                $this->authorModel->addAuthor($authorName,$authorDeath,$imageName,$website,$authorDes);
            }
            header("location:index.php?page=authors");
        }
    }

    public function deleteAuthor(){
        $authorId = (int)$_REQUEST['author_id'];
        if (!empty($authorId)){
            $this->authorModel->deleteAuthor($authorId);
        }
        header("location:index.php?page=authors");
    }
    public function updateAuthor(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $authorId = (int)$_REQUEST['author_id'];
            $author = $this->authorModel->getAuthorById($authorId);
//        var_dump($author);
            require "src/View/author/update-author.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $authorId = (int)$_REQUEST['author_id'];
            $authorName = $_REQUEST['author_name'];
            $authorDeath = $_REQUEST['birth_death'];
            $website = $_REQUEST['author_website'];
            $description = $_REQUEST['author_des'];
            $path = "images/";
            $tmpName = $_FILES['author_image']['tmp_name'];
            $imageName = $_FILES['author_image']['name'];
            move_uploaded_file($tmpName, $path.$imageName);
            if (!empty($authorId) && !empty($imageName) && !empty($description)){
                if (empty($imageName)){
                    $imageName = $_REQUEST['old_image'];
                }
                $this->authorModel->updateAuthor($authorId,$authorName,$authorDeath,$imageName,$website,$description);

            }
            header("location:index.php?page=authors");
        }
    }

}


