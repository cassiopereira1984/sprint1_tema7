<?php
require "nivel1ejercicio1.php";

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends NumberChecker {

    function isEvenTest() {
        $parNumero = new NumberChecker(2);
        $imparNumero = new NumberChecker(3);

        This->assertTrue($parNumero->isEven());
        This->assertTrue($imparNumero->isEven());
    }
}