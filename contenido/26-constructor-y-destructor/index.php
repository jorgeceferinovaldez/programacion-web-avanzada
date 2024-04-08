<?php

require_once 'libs/matematica/Financiera.php';

use Libs\Matematica\Financiera;

$objeto = new Financiera(1000, 0.1, 2);

#Hacemos un var_dump para ver el contenido del objeto
var_dump($objeto);

#Invocamos al metodo tea
echo $objeto->tea();
echo "<br>";