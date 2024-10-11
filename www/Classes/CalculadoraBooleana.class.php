<?php 

class CalculadoraBooleana {

    public function and(bool $a, bool $b): bool 
    {
        return $a && $b;
    }

    public function or(bool $a, bool $b): bool 
    {
        return $a || $b;
    }

    public function not(bool $a): bool 
    {
        return !$a;
    }

    public function xor(bool $a, bool $b): bool 
    {
        return $a xor $b;
    }

}