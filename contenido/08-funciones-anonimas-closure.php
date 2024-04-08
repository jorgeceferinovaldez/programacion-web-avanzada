<?php

// Funciones anonimas (closure)
// Las funciones anonimas son funciones que no tienen nombre
// Las funciones anonimas pueden ser asignadas a una variable
// Las funciones anonimas pueden ser pasadas como parametros a otras funciones
// Las funciones anonimas pueden ser retornadas por otras funciones

// Declaracion de una funcion anonima
$suma = function($a, $b){
    return $a + $b;
};

// Llamada de una funcion anonima
echo $suma(1, 2);


############################################
// Callbacks con funciones anonimas
echo "\n\n";

$suma = function ($a, $b, $callback){  //callback va a obtener la respuesta de la sumatoria
    return $callback($a+$b);
};

$suma(3, 4, function($resultado){
    echo $resultado;
});
