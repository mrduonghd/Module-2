<?php

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    public function calculate($a, $b, $o)
    {
        switch ($o) {
            case ADDITION:
                return $a + $b;
            case SUBTRACTION:
                return $a - $b;
            case '*':
                return $a * $b;
            case DIVISION:
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "Can not divide by ";
                }
            default:
                return "Unsupported operation";
        }
    }
}