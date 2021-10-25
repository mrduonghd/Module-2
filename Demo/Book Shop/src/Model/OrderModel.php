<?php

namespace App\Model;
use PDO;

class OrderModel
{
    protected $database;

    public function __construct(){
        $db = new DBConnect();
        $this->database =$db->connect();
    }

    public function getAllOrder(){
        $sql = "SELECT*FROM v_orders_list";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function getOrderDetails($orderId){
        $sql = "SELECT*FROM v_orders_books WHERE order_id =:order_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':order_id',$orderId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllOrderLast(){
        $sql = "SELECT*FROM orders ORDER BY order_id DESC LIMIT 1";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function createOrder($employeeId,$customerId,$orderDate){
        $sql = "INSERT INTO orders(employee_id,customer_id,order_date) VALUES (:employee_id,:customer_id,:order_date)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':employee_id',$employeeId);
        $stmt->bindParam(':customer_id',$customerId);
        $stmt->bindParam(':order_date',$orderDate);
        $stmt->execute();
//        var_dump($stmt->execute());

    }

    public function createOrderDetail($orderId,$bookId,$salePrice){
        $sql = "INSERT INTO order_details(order_id,book_id,sale_price) VALUES (:order_id,:book_id,:sale_price)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':order_id',$orderId);
        $stmt->bindParam(':book_id',$bookId);
        $stmt->bindParam(':sale_price',$salePrice);
        $stmt->execute();
    }

    public function getTotalById($orderId){
        $sql = "SELECT SUM(quantity*sale_price) AS total FROM order_details WHERE order_id =:order_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':order_id',$orderId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateTotalOrder($orderId,$total){
        $sql = "UPDATE orders SET total =:total WHERE order_id =:order_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':order_id',$orderId);
        $stmt->bindParam(':total',$total);
        $stmt->execute();
    }

    public function deleteOrderById($orderId){
        $sql = "DELETE FROM orders WHERE order_id =:order_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':order_id',$orderId);
        $stmt->execute();
    }

    public function deleteOrderDetailsById($orderDetailsId){
        $sql = "DELETE FROM order_details WHERE order_id =:order_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':order_id',$orderDetailsId);
        $stmt->execute();
    }
}