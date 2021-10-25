<?php
include_once "Rectangle.php";

$rectangle = new Rectangle(20,10);
echo "chieu rong la : " . $rectangle->width . "<br>";
echo "chieu dai la : " . $rectangle->height . "<br>";
echo "dien tich la : " . $rectangle->getArea() . "<br>";
echo "chu vi la : " . $rectangle->getPerimeter() . "<br><br>";

$rectangle->displayRec();
?>