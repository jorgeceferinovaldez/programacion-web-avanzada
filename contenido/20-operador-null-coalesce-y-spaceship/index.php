<?php

//Operador NULL
$usuario_id = !empty($_GET['id']) ? $_GET['id'] : 1; //Evito que se muestre un error si no se envia el parametro id
var_dump($usuario_id);

# Exsite una forma mas corta de hacer esto, con el operador NULL COALESCE
$usuario_id = $_GET['id'] ?? 1; //Si no existe el parametro id, asigna el valor 1


//Operador SPACESHIP
$numero1 = 10;
$numero2 = 10;

var_dump($numero1 <=> $numero2); //Devuelve 0 si son iguales, 1 si el primero es mayor, -1 si el segundo es mayor
