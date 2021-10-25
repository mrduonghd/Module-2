<?php
include_once "Dividebyzeroexception.php";

function divide($numerator,$denominator){
    if ($denominator == 0 ){
        throw new DivideByZeroException();
    }
        return $numerator / $denominator;
    
}

try{
    $result = divide(10,2);
    echo $result . "<br>";
    $result = divide(10,0);
    echo $result;
}catch (DivideByZeroException $e){
    echo  ' error: ' . $e;
}