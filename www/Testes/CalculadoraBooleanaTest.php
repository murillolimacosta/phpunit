<?php

use PHPUnit\Framework\TestCase;
require 'Classes/CalculadoraBooleana.class.php';

class CalculadoraBooleanaTest extends TestCase {

    private CalculadoraBooleana $calculadoraBooleana;

    protected function setUp(): void {
        $this->calculadoraBooleana = new CalculadoraBooleana();
    }

    public function testAnd(): void {
        $resultado = $this->calculadoraBooleana->and(true, false);
        $this->assertEquals(false, $resultado);
    }

    public function testOr(): void {
        $resultado = $this->calculadoraBooleana->or(true, false);
        $this->assertEquals(true, $resultado);
    }

    public function testNot(): void {
        $resultado = $this->calculadoraBooleana->not(true);
        $this->assertEquals(false, $resultado);
    }

    public function testXor(): void {
        $resultado = $this->calculadoraBooleana->xor(false, false);
        $this->assertEquals(false, $resultado);
    }
}
