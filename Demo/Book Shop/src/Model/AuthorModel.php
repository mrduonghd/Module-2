<?php

namespace App\Model;
use PDO;

class AuthorModel
{
    protected $database;

    public function __construct(){
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllAuthors(){
        $sql = "SELECT*FROM author";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }

    public function getAuthorById($id){
        $sql = "SELECT*FROM author WHERE author_id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addAuthor($authorName, $authorDeath, $authorImage, $website, $authorDes){
        $sql = "INSERT INTO author(author_name,birth_death,author_image,website,description) VALUES(:author_name,:birth_death,:author_image,:website,:description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':author_name',$authorName);
        $stmt->bindParam(':birth_death',$authorDeath);
        $stmt->bindParam(':author_image',$authorImage);
        $stmt->bindParam(':website',$website);
        $stmt->bindParam(':description',$authorDes);
        $stmt->execute();
//        var_dump($stmt->execute());
    }

    public function deleteAuthor($authorId){
        $sql = "DELETE FROM author WHERE author_id =:author_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':author_id',$authorId);
        $stmt->execute();
    }

    public function updateAuthor($authorId,$authorName, $authorDeath, $authorImage, $website, $authorDes){
        $sql = "UPDATE author SET author_name=:author_name,birth_death=:birth_death,author_image=:author_image,website=:website,description=:description WHERE author_id=:author_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':author_id',$authorId);
        $stmt->bindParam(':author_name',$authorName);
        $stmt->bindParam(':birth_death',$authorDeath);
        $stmt->bindParam(':author_image',$authorImage);
        $stmt->bindParam(':website',$website);
        $stmt->bindParam(':description',$authorDes);
        $stmt->execute();
//        var_dump($stmt->execute());
    }

}
