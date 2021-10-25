<?php
namespace App\Controller;

use App\Model\OrderModel;
use App\Model\ProductModel;
use App\Model\CustomerModel;
use App\Model\EmployeeModel;

class OrderController
{
    protected $orderModel;
    protected $productModel;
    protected $customerModel;
    protected $employeeModel;

    public function __construct(){
        $this->orderModel = new OrderModel();
        $this->productModel = new ProductModel();
        $this->customerModel = new CustomerModel();
        $this->employeeModel = new EmployeeModel();
    }

    public function getAllOrder(){
        $orders = $this->orderModel->getAllOrder();
        include "src/View/order/orders-list.php";
    }

    public function createOrder(){
        if ($_SERVER["REQUEST_METHOD"] == 'GET'){
            $books = $this->productModel->productList();
            $customers = $this->customerModel->getAllCustomer();
            $employees = $this->employeeModel->getAllEmployee();
//            var_dump($customers);
            include "src/View/order/create-order.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $books = $_REQUEST['books'];
            $employeeId = (int)$_REQUEST['employee_id'];
            $customerId = (int)$_REQUEST['customer_id'];
            $orderDate = $_REQUEST['order_date'];
            if (!empty($books) && !empty($employeeId) && !empty($customerId) && !empty($orderDate)){
                $this->orderModel->createOrder($employeeId,$customerId,$orderDate);
                $lastId = $this->orderModel->getAllOrderLast();
                $orderDetailId =(int)$lastId[0]['order_id'];
                $bookOrder = [];
                for ($i = 0; $i < count($books); $i++){
                    $bookOrder[$i]['id'] = (int)$books[$i];
                    $book = $this->productModel->productDetails($books[$i]);
                    $bookOrder[$i]['sale_price'] = $book[0]['price_sale'];
                    $this->orderModel->createOrderDetail($orderDetailId,$bookOrder[$i]['id'],$bookOrder[$i]['sale_price']);
                }
                $totals = $this->orderModel->getTotalById($orderDetailId);
                $total = $totals[0]['total'];
                $this->orderModel->updateTotalOrder($orderDetailId,$total);
            }
            header('location:index.php?page=orders-list');
        }
    }

    public function deleteOrderById(){
        $orderId = (int)$_REQUEST['order_id'];
        if (!empty($orderId)){
            $this->orderModel->deleteOrderById($orderId);
            $this->orderModel->deleteOrderDetailsById($orderId);
        }
        header('location:index.php?page=orders-list');
    }

    public function getOrderDetailById(){
        $orderDetailId = (int)$_REQUEST['order_id'];
        $orderDetails = $this->orderModel->getOrderDetails($orderDetailId);
        include "src/View/order/order-details.php";
    }
}
