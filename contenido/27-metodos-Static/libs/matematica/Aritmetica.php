<?php
namespace Libs\Matematica;

class Aritmetica {
    public static function suma(float $a, float $b) : float{
        return $a + $b;
    }
    
    public static function resta(float $a, float $b) : float{
        return $a - $b;
    }
    
    public static function multiplicacion(float $a, float $b) : float{
        return $a * $b;
    }
    
    public static function division(float $a, float $b) : float{
        return $a / $b;
    }

    #Determina si un número es par
    private static function esPar(float $numero) : bool{
        return ($numero % 2 == 0);
    }

    public static function calcularParOImpar(float $numero) : bool {
        return (self->esPar($numero)) ? 1 : 0;
    }
}