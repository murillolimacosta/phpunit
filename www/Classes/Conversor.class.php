<?php

namespace Classes;

class Conversor
{
    public function converterMetrosParaQuilometros(float $metros): float
    {
        return $metros / 1000;
    }

    public function converterSegundosParaMinutos(int $segundos): float
    {
        return $segundos / 60;
    }

    public function converterCelsiusParaFahrenheit(float $celsius): float
    {
        return ($celsius * 9/5) + 32;
    }
}
