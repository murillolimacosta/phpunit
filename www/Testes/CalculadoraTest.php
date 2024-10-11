<?php 

use PHPUnit\Framework\TestCase;
require 'Classes/Calculadora.class.php';

class CalculadoraTest extends TestCase {

    private Calculadora $calculadora;

    protected function setUp(): void  {
        $this->calculadora = new Calculadora();
    }

    public function testSomar(): void {

        $resultado = $this->calculadora->somar(4.3,3.5);
        $this->assertEquals(7.8, $resultado);
    }

    public function testSubtrair(): void {

        $resultado = $this->calculadora->subtrair(4,3);
        $this->assertEquals(1, $resultado);
    }

    public function testMultiplicar(): void {

        $resultado = $this->calculadora->multiplicar(3,6);
        $this->assertEquals(18, $resultado);
    }

    public function testDividir(): void {

        $resultado = $this->calculadora->dividir(12,3);
        $this->assertEquals(4, $resultado);
    }

}