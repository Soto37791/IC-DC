<?php
use PHPUnit\Framework\TestCase;
use Manuel\Unittesting\Calculadora;

class CalculadoraTest extends TestCase{
    public function testSResta(){
        $Calculadora = new Calculadora();
        $this->assertEquals(3,$Calculadora->Resta(10,8));
    }

    public function testPotencia(){
        $Calculadora = new Calculadora();
        $this->assertEquals(8,$Calculadora->Potencia(2,3));
        $this->expectException(\InvalidArgumentException::class);
        $Calculadora->Potencia(0,2);
    }
} //este comentario indicará la diferencia
// que pasaaa!!!!     kfkfk llllklklkllll
/*kkkkkkk*/


/*este cambio no debe de aparecer en las carpetas del xampp del proyecto corriendo ya que 
no esta correcta una de las pruebas unitarias entonces no deberia de dar pase y actualizar con el workflows de git */
