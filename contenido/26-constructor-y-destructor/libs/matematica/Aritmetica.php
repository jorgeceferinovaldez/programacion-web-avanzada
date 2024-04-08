<?php
namespace Libs\Matematica;

class Aritmetica {
    public function suma(float $a, float $b) : float{
        return $a + $b;
    }
    
    public function resta(float $a, float $b) : float{
        return $a - $b;
    }
    
    public function multiplicacion(float $a, float $b) : float{
        return $a * $b;
    }
    
    public function division(float $a, float $b) : float{
        return $a / $b;
    }

    #Determina si un número es par
    private function esPar(float $numero) : bool{
        return ($numero % 2 == 0);
    }

    public function calcularParOImpar(float $numero) : bool {
        return ($this->esPar($numero)) ? 1 : 0;
    }
}