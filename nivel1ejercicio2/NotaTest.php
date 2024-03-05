<?php
require "nivel1ejercicio2.php";

use PHPUnit\Framework\TestCase;

class NotaTest extends TestCase {

    public function testPrimeraDivisio() {
        $primeraNota = new Nota();
        $resultado = $primeraNota->resultadoNota();
        $this->assertEquals("Primera Divisió", $resultado);
    }

    public function testSegonaDivisio() {
        $segonaNota = new Nota();
        $resultado = $segonaNota->resultadoNota();
        $this->assertEquals("Segona Divisió", $resultado);
    }

    public function testTerceraDivisio() {
        $terceraNota = new Nota();
        $resultado = $terceraNota->resultadoNota();
        $this->assertEquals("Tercera Divisió", $resultado);
    }

    public function testReprovat() {
        $reprovatNota = new Nota();
        $resultado = $reprovatNota->resultadoNota();
        $this->assertEquals("Reprovat", $resultado);
    }
}
/*
    public function testSegonaDivisio() {
        $nota = new Nota();
        $this->assertEquals("Segona Divisió", $nota->nota(50));
    }

    public function testTerceraDivisio() {
        $nota = new Nota();
        $this->assertEquals("Tercera Divisió", $nota->nota(40));
    }

    public function testReprovat() {
        $nota = new Nota();
        $this->assertEquals("Reprovat", $nota->nota(20));
    }


        /*
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
        $this->assertFalse($zeroNumero->isPositive()); */
