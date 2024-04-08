<?php
namespace Libs\Matematica;

class Financiera{
    public function tea(float $capital, float $tasa, int $periodo) : float{
        // capital * (1 + tasa) ^ periodo  
        return ($capital * (1 + $tasa) ** $periodo);
    }    
}