<?php
use PHPUnit\Framework\TestCase;
use Manuel\Unittesting\MathOperations;

class MathOperationsTest extends TestCase {
    public function testMultiply() {
        $math = new MathOperations();
        $this->assertEquals(6, $math->multiply(2, 3));
    }

    public function testDivide() {
        $math = new MathOperations();
        $this->assertEquals(2, $math->divide(10, 5));
        $this->expectException(\InvalidArgumentException::class);
        $math->divide(10, 0);
    }
}
// actualizado yaya jfjfjjfj que es eso