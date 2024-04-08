<?php

//  Operadores aritméticos
$a = 4;
$b = 2;
$c = $a + $b; // suma
$d = $a - $b; // resta
$e = $a * $b; // multiplicación
$f = $a / $b; // división
$g = $a % $b; // módulo (resto de la división)
$h = $a ** $b; // exponenciación a partir de PHP 5.6


echo "El resultado obtenido de $a + $b es $c\n";
echo "El resultado obtenido de $a - $b es $d\n";
echo "El resultado obtenido de $a * $b es $e\n";
echo "El resultado obtenido de $a / $b es $f\n";
echo "El resultado obtenido de $a % $b es $g\n";
echo "El resultado obtenido de $a ** $b es $h\n";


//  Operadores de asignación

# Trabajando con números
$a = 1;
$a += 1; // $a = $a+1;
$a -= 1; // $a = $a-1;
$a *= 1; // $a = $a*1;
$a /= 1; // $a = $a/1;
$a %= 1; // $a = $a%1; 
$a **= 1; // $a = $a**1;

# Trabajando con cadenas
echo "\n\n";

$a = "Hola ";
$a .= "mundo"; // $a = $a . "mundo";

echo $a; // Hola mundo


//  Operadores de comparación
echo "\n\n";
$a = 1 == 1; // true
$b = 1 != 1; // false
$c = 1 != 1; // false
$d = 1 < 1; // false
$e = 1 > 1; // false
$f = 1 <= 1; // true
$g = 1 >= 1; // true
$h = 1 === '1'; // false verifica que sean identicos en contenido y tipo

var_dump($a, $b, $c, $d, $e, $f, $g);

//  Operadores de incremento/decremento
echo "\n\n";
$a = 1;
$a++; // $a = $a + 1;
$a++; // $a = $a + 1;
$a++; // $a = $a + 1;
echo $a; // 4

echo "\n\n";
$a--; // $a = $a - 1;
$a--; // $a = $a - 1;
$a--; // $a = $a - 1;
$a--; // $a = $a - 1;
$a--; // $a = $a - 1;
echo $a; // -1

