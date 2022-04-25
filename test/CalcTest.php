<?php

use PHPUnit\Framework\TestCase;

require_once './src/Calc.php';

class CalcTest extends TestCase {
    public function testInstance() {
        $this->assertInstanceOf(
            Calc::class,
            new Calc(1, 2)
        );
    }

    public function testAdd() {
        $calc = new Calc(1, 2);
        $this->assertEquals(3, $calc->add());
    }


    public function testSub() {
        $calc = new Calc(1, 2);
        $this->assertEquals(-1, $calc->sub());
    }


    public function testMult() {
        $calc = new Calc(1, 2);
        $this->assertEquals(2, $calc->mult());
    }


    public function testDiv() {
        $calc = new Calc(1, 2);
        $this->assertEquals(0.5, $calc->div());
    }


    public function testDivByZero() {
        $calc = new Calc(1, 0);
        $this->expectException(DivisionByZeroError::class);
        $calc->div();
    }


    public function testPow() {
        $calc = new Calc(2, 3);
        $this->assertEquals(8, $calc->pow());
    }


    public function testRoot() {
        $calc = new Calc(9, 2);
        $this->assertEquals(3, $calc->root());
    }
}


?>