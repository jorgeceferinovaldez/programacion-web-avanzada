<?php
require_once 'libs/matematica/aritmetica/formula.php';
require_once 'libs/matematica/financiera/formula.php';

#print("Hola")
#echo suma(1, 2) . '<br>'; // esto me da un error

echo Libs\Matematica\Aritmetica\suma(1, 2) . '<br>'; // esto funciona
print("\n");
echo Libs\Matematica\Financiera\tea(10000, 0.09, 2) . '<br>'; // esto funciona
