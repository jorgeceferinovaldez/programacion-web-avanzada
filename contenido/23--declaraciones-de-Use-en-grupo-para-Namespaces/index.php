<?php
require_once 'libs\matematica\aritmetica\formula.php';
require_once 'libs\matematica\financiera\formula.php';

# El Use se usa para cargar un namespace
# y poder acceder a sus constantes, funciones, clases, etc
# sin tener que escribir el namespace completo
# en cada llamada

// use function Libs\Matematica\Aritmetica\suma,
//              Libs\Matematica\Aritmetica\multiplicacion;

# desde PHP 7.0 se pueden agrupar los Use
# para no tener que escribirlos uno por uno
# y que el código quede más limpio
use function Libs\Matematica\Aritmetica\{suma, multiplicacion};


echo suma(1, 2) . '<br>'; //imprime 3
echo multiplicacion(9, 9) . '<br>'; //imprime 81
