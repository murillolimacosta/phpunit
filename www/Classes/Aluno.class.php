<?php

namespace Classes;

class Aluno
{
    private $notas = [];

    public function adicionarNota(float $nota): void
    {
        if ($nota < 0 || $nota > 10) {
            throw new \InvalidArgumentException('Nota inválida. Deve estar entre 0 e 10.');
        }

        $this->notas[] = $nota;
    }

    public function calcularMedia(): float
    {
        if (empty($this->notas)) {
            throw new \Exception('Nenhuma nota disponível para cálculo.');
        }

        return array_sum($this->notas) / count($this->notas);
    }
}
