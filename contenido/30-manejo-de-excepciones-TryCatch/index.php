<?php

# Excepciones en PHP
# Son errores que se pueden prevenir
# Se pueden controlar
# Se pueden personalizar
# Se pueden lanzar
# Las excepciones son objetos
# Todas las excepciones heredan de la clase Exception
# Las excepciones se lanzan con la palabra reservada throw
# Las excepciones se capturan con la estructura try catch
# Las excepciones se pueden personalizar

# Ejemplo con try catch
try {
    $a = 10;
    $b = 0;
    if ($b == 0) {
        throw new Exception('No se puede dividir por cero');
    }

    #En caso de que no se lance la excepcion
    #Se ejecuta el codigo normalmente
    $c = $a / $b;
} catch (Exception $e) { 
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

echo "<br>";
echo "<br>";

require_once 'libs/matematica/Aritmetica.php';

use Libs\Matematica\Aritmetica;

#var_dump(Aritmetica::division(10,2));

# Ejemplo con try catch

try{
    echo (Aritmetica::division(10,0));
} catch (Exception $e) {
    echo 'Excepción capturada 2: ',  $e->getMessage(), "\n";
}

# https://www.php.net/manual/es/class.errorexception.php

# Colocando al principio del archivo
#set_error_handler("exception_error_handler");

# Y eliminando el throw de la clase Aritmetica
# Se puede capturar el error como una excepcion