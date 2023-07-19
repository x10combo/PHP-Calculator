<?php

require_once 'vendor/autoload.php';

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd() {

        $calculator = new App\Calculator;
        $result = $calculator -> add(20,5);

        //Asserts if two values are the same
        $this -> assertSame(25, $result); 
    }

    public function testSubstract() {

        $calculator = new App\Calculator;
        $result = $calculator -> subtract(20,5);

        //Asserts if two values are the same
        $this -> assertSame(15, $result); 
    }

    public function testMultiply() {

        $calculator = new App\Calculator;
        $result = $calculator -> multiply(20,5);

        //Asserts if two values are the same
        $this -> assertSame(100, $result); 
    }

    public function testDivide() {

        $calculator = new App\Calculator;
        $result = $calculator -> divide(20,5);

        //Asserts if two values are the same
        $this -> assertSame(4, $result); 
    }
}

//make sure to use --testdox while testing