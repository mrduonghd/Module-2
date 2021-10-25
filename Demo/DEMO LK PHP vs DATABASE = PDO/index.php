<?php
include_once "DBconnect.php";
include_once "CustomerRepository.php";
$a = new CustomerRepository('StudentManager','students');
// $b = $a->getAllStudent();
echo "<pre>";
// print_r($b);
print_r($a->getAllStudent());