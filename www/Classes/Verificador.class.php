<?php

class Verificador
{
    public function ePar(int $numero): bool
    {
        return $numero % 2 === 0;
    }

    public function ePositivo(int $numero): bool
    {
        return $numero > 0;
    }

    public function temTamanhoMinimo(string $texto, int $tamanho): bool
    {
        return strlen($texto) >= $tamanho;
    }

    public function contemLetra(string $texto, string $letra): bool
    {
        return strpos($texto, $letra) !== false;
    }
}
