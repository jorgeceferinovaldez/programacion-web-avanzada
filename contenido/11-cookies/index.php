<?php
//cookies

setcookie('motos', 'ktm, suzuki, harley', time() + 3600); //crear cookie que durarar 1 minuto

print_r($_COOKIE['motos']); //leer cookie
echo "<br>";
var_dump($_COOKIE['motos']); //leer cookie

//Destruir cookie
//setcookie('motos', null, time() - 1); //destruir cookie
