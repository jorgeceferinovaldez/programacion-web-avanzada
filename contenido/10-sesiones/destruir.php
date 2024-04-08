<?php
session_start(); //Iniciar la sesión

unset($_SESSION['frutas']); //Destruir la sesión especificada

//alternativa: session_destroy(); //Destruir todas las sesiones

var_dump($_SESSION['frutas']); //Leer el valor de la sesión