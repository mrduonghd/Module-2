<?php
include_once "arraylist.php";

$num  =  new ArrayList();
$num-> add(1);
$num-> add(5);
$num-> add(8);
// $num-> add(30);

echo $num -> get(1) . "<br>";
// echo $num -> get(30);
echo $num -> get(-1);

