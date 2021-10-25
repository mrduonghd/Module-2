<?php
class DivideByZeroException extends Exception{
    public function __toString()
    {
        echo "can't divide by zero";
    }
}