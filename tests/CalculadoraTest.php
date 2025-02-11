<?php
use PHPUnit\Framework\TestCase;
use Manuel\Unittesting\Calculadora;

class CalculadoraTest extends TestCase{
    public function testSResta(){
        $Calculadora = new Calculadora();
        $this->assertEquals(2,$Calculadora->Resta(10,8));
    }

    public function testPotencia(){
        $Calculadora = new Calculadora();
        $this->assertEquals(8,$Calculadora->Potencia(2,3));
        $this->expectException(\InvalidArgumentException::class);
        $Calculadora->Potencia(0,2);
    }
} //este comentario indicará la diferencia