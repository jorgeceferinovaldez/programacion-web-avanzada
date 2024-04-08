<?php

//Funciones
    //Las funciones son un conjunto de instrucciones que se ejecutan cuando son llamadas
    //Las funciones pueden recibir parametros y devolver un valor
    //Las funciones pueden ser llamadas desde cualquier parte del codigo

//Declaracion de una funcion
function doSomething(){
    return "Hola mundo\n";
}

//Llamada de una funcion
echo doSomething();

############################################
// Funciones con parametros
echo "\n\n";
function sayHelloTo($name){
    return "Hola $name\n";
}

//Llamada de una funcion
echo sayHelloTo('Jorge');


############################################
// Funciones con parámetros por defecto
echo "\n\n";
function decirHola($name = 'usuario'){
    return "Hola $name\n";
}

//Llamada de una funcion
echo decirHola();


############################################
// Funciones con parametros por referencia
echo "\n\n";

$x = 1;

function addOne(&$number){
    $number++;
}

addOne($x);

echo $x;

############################################
// Funciones con parámetros de longitud variable (variadicas) PHP 5.6+
echo "\n\n";

function agregaraCarroCompra(...$items){
   foreach($items as $item){
       echo $item . "\n";
   }
}

agregaraCarroCompra(
    'manzana', 
    'pera', 
    'naranja',
    'banana');

############################################
// Funciones recursivas
echo "\n\n";

function buscarAnioPar($anio){
    if($anio % 2 == 0){
        echo "PAR: ";
    }

    if($anio != date('Y')){ //date('Y') devuelve el año actual
        echo $anio . "\n";
        buscarAnioPar($anio + 1);
    }
}

buscarAnioPar(2000);