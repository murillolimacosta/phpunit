<?php

namespace Classes;

class Contador
{
    private $valor = 0;

    public function incrementar(): void
    {
        $this->valor++;
    }

    public function decrementar(): void
    {
        $this->valor--;
    }

    public function resetar(): void
    {
        $this->valor = 0;
    }

    public function getValor(): int
    {
        return $this->valor;
    }
}
