<?php
namespace App;


// Calculator class using 4 methods for performing each arithmetic operation
class Calculator {
    public function add($num1, $num2) {
        return $num1 + $num2;
    }
    
    public function subtract($num1, $num2){
        return $num1 - $num2;

    }

    public function multiply($num1, $num2){
        return $num1 * $num2;
    }

    public function divide($num1, $num2){
        return $num1 / $num2;
    }
}

