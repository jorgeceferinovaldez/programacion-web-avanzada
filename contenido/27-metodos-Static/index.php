<?php
# Metodos estaticos
# Son metodos que se pueden ejecutar sin necesidad de instanciar un objeto
# Se pueden ejecutar directamente desde la clase
# Se pueden ejecutar desde un objeto
require_once 'libs/matematica/Aritmetica.php';

use Libs\Matematica\Aritmetica;

var_dump(Aritmetica::suma(10, 20));

echo "<br>";
var_dump(Aritmetica::resta(5,4));