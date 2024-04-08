<?php

//Constantes
//Es un contenedor de información que no puede variar
//Se recomienda que las constantes se escriban en mayusculas 
define('_ENVIROMENT_', 'dev'); //development , production, testing

echo _ENVIROMENT_;
echo "\n";

//Constantes predefinidas
echo PHP_OS; //Sistema operativo
echo "\n";
echo PHP_VERSION; //Version de PHP
echo "\n";
echo PHP_EXTENSION_DIR; //Extensiones que tenemos instaladas
echo "\n";
echo __LINE__; //Linea en la que estamos
echo "\n";
echo __FILE__; //Ruta completa del archivo
echo "\n";
echo __FUNCTION__; //Nombre de la funcion
echo "\n";
echo __CLASS__; //Nombre de la clase
echo "\n";
echo __METHOD__; //Nombre del metodo
echo "\n";
echo __NAMESPACE__; //Nombre del namespace

//Constantes magicas
//Son constantes que cambian dependiendo de donde estemos
//Ejemplo: __LINE__ nos dice en que linea estamos
//Ejemplo: __FILE__ nos dice en que archivo estamos
//Ejemplo: __FUNCTION__ nos dice en que funcion estamos
//Ejemplo: __CLASS__ nos dice en que clase estamos
//Ejemplo: __METHOD__ nos dice en que metodo estamos
//Ejemplo: __NAMESPACE__ nos dice en que namespace estamos

//Constantes predefinidas
//https://www.php.net/manual/es/reserved.constants.php

//Constantes magicas
//https://www.php.net/manual/es/language.constants.predefined.php

//Constantes de usuario
//https://www.php.net/manual/es/language.constants.php


//Novedades PHP 7
//https://www.php.net/releases/7_0_0.php


#Novedades PHP 8
//https://www.php.net/releases/8.0/es.php

# Podemos definir una constante como array
define('_DB_CONFIG',[
    'host' => 'localhost',
    'user' => 'root',
    'password' => '123456',
]);

var_dump ( _DB_CONFIG);

echo _DB_CONFIG['host'];