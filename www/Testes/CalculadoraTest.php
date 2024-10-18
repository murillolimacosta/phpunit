<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Classes\Calculadora;

class CalculadoraTest extends TestCase
{
    protected $calculadora;

    protected function setUp(): void
    {
        $this->calculadora = new Calculadora();
    }

    public function testSomar()
    {
        $this->assertEquals(5, $this->calculadora->somar(2, 3));
    }

    public function testSubtrair()
    {
        $this->assertEquals(1, $this->calculadora->subtrair(3, 2));
    }

    public function testMultiplicar()
    {
        $this->assertEquals(6, $this->calculadora->multiplicar(2, 3));
    }

    public function testDividir()
    {
        $this->assertEquals(2, $this->calculadora->dividir(6, 3));
        $this->expectException(\InvalidArgumentException::class);
        $this->calculadora->dividir(6, 0); // Teste de divisão por zero
    }
}
