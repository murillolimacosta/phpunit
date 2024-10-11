<?php 

include_once 'vendor/autoload.php';

$calculadora = new Calculadora();

$a = 3.5;
$b = 3.5;

$resultado = $calculadora->somar($a, $b);

var_dump($resultado);

echo '<br><br>-------------------------<br><br>'; 

$calculadoraBooleana = new CalculadoraBooleana();

$a = false;
$b = true;

$resultado = $calculadoraBooleana->xor($a, $b);

var_dump($resultado);