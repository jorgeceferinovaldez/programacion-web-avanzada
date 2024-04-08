<?php
declare(strict_types=1);

# A partir de PHP 7.0 se puede declarar el tipo de dato que se espera recibir en una función
# Ejemplo 1 
function sumar(int ...$valores) {
    return array_sum($valores);
}

#var_dump(sumar(1, 2, '4')); //Devuelve 7 porque castea a numero el caracter
# si quiero que sea estrcto debo colocar al inicio la instrucción declare(strict_types=1);

#Si incluyo esta instrucción me dar´pa un error

# Para subsanarlo debo enviar los datos como enteros
echo(sumar(1, 2, 5)); 

# Ejemplo 2
echo "<br>";
# Tanmbien podemos especificar el tipo de dato de retorno de una función
function sumar2(int ...$valores): int {
    return array_sum($valores);
}

echo(sumar2(10, 2, 5));
echo "<br>";

# Ejemplo 3
function tea(float $capital, float $tasa, int $periodo) : string{
    // capital * (1 + tasa) ^ periodo  
    return number_format(($capital * (1 + $tasa) ** $periodo),2);
}

var_dump(tea(1000, 0.05, 2));