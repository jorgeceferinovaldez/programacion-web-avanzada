<?php
require_once 'libs/matematica/Aritmetica.php';
require_once 'libs/matematica/Financiera.php';

use Libs\Matematica\{Aritmetica, Financiera};

$objeto = new Aritmetica();

#Hacemos un var_dump para ver el contenido del objeto
var_dump($objeto->suma(5, 5));

#Usemos metodos privados desde la clase
var_dump($objeto->calcularParOImpar(10));