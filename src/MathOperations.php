<?php
namespace Manuel\Unittesting;

class MathOperations {
    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b === 0) {
            throw new \InvalidArgumentException("Division by zero");
        }
        return $a / $b;
    }
}
