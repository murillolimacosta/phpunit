<?php

namespace Classes;

class RepositorioSimples
{
    private $dados = [];

    public function adicionar(string $item): void
    {
        $this->dados[] = $item;
    }

    public function listar(): array
    {
        return $this->dados;
    }

    public function buscarPorIndice(int $indice): ?string
    {
        return $this->dados[$indice] ?? null;
    }

    public function removerPorIndice(int $indice): void
    {
        if (isset($this->dados[$indice])) {
            unset($this->dados[$indice]);
        }
    }
}
