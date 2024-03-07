<?php
include "calculator.php";

use PHPUnit\Framework\TestCase;

class calculatortest extends TestCase {
    private $calculator;

    public function setUp():void {
        $this->calculator = new Calculator();
    }
    public function testMultiply(){
        $this->assertEquals(4,$this->calculator->Multiply(4,1));
    }
    public function testAdd(){
        $this->assertEquals(5,$this->calculator->Add(4, 1));
    }
    public function testSubtract(){
        $this->assertEquals(3,$this->calculator->Subtract(4, 1));
    }
}