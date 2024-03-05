<?php
require "nivel1ejercicio1.php";

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {

    function testIsEven() {
        $parNumero = new NumberChecker(2);
        $imparNumero = new NumberChecker(3);

        $this->assertTrue($parNumero->isEven());
        $this->assertFalse($imparNumero->isEven());
    }
    public function testIsPositive() {

        $positivoNumero = new NumberChecker(8);
        $negativoNumero = new NumberChecker(-8);
        $zeroNumero = new NumberChecker(0);

        $this->assertTrue($positivoNumero->isPositive()); 
        $this->assertFalse($negativoNumero->isPositive()); 
        $this->assertFalse($zeroNumero->isPositive()); 
    }
}