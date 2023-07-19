<?php

require_once 'vendor/autoload.php';

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd() {

        $calculator = new App\Calculator;
        $result = $calculator -> add(20,5);

        //Asserts if two values are the same
        $this -> assertEquals(25, $result); 
    }
}