<?php
namespace Manuel\Unittesting;

use InvalidArgumentException;

Class Calculadora{
    public function Resta($numero1, $numero2){
       return $numero1 - $numero2;
    }

    public function Potencia($numero,$potencia){
        if($numero === 0 || $potencia === 0 ){
            throw new InvalidArgumentException("La base y la potencia no pueden ser 0");
        }
        return pow($numero,$potencia);
    }
}