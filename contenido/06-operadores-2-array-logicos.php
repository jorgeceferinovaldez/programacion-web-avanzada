<?php
############################################
// Operadores de array
$a = ['php','java','c++','c#'];
$b = ['python','javascript','ruby','rust'];

// Operador de union (Aritmetico)
var_dump($a + $b); // ['php','java','c++']
                //  El operador de union solo se queda con los elementos del primer array
                //  que no esten en el segundo array

echo "\n\n";
$a = ['php','java','c++'];
$b = ['python','javascript','ruby','rust'];
var_dump($a + $b); // ['php','java','c++','rust']
                //  El operador de union solo se queda con los elementos del primer array
                //  que no esten en el segundo array

// Si queremos que una los dos arreglos sin importar si se repiten los elementos
// podemos usar la funcion array_merge
echo "\n\n";
$a = ['php','java','c++','c#'];
$b = ['python','javascript','ruby','rust'];
var_dump(array_merge($a, $b)); // ['php','java','c++','c#','python','javascript','ruby','rust']

// Operador de comparacion
echo "\n\n";
$a = ['php','java','c++','c#'];
$b = ['python','javascript','ruby','rust'];
$c = ['php','java','c++','c#'];

var_dump($a == $b); // false
var_dump($a != $b); // true
var_dump($a <> $b); // true
var_dump($a === $b); // false
var_dump($a !== $b); // true
var_dump($a == $c); // true
var_dump($a === $c); // true

############################################
// Operador logicos
echo "\n\n";

$a = 1;
$b = 2;
$c = 3;

var_dump($a == 1 && $b == 2); // true
var_dump($a === 1 && $b === 2); // true
var_dump($a === 1 || $b === 3); // true
var_dump($a === 1 && $b === 2 && $c === 3); // true
