<?php

class Calculator
{

    public static function add($number1, $number2)
    {
        return $number1 + $number2;
    }
}
// n'est plus de l'objet il n'ya pas dinstanciation
echo Calculator::add(2,3) . "\n";