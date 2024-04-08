<?php

var_dump($_POST);
echo "<br>";
echo "<br>";

var_dump($_POST['libro']);

echo "<br>";
echo "<br>";
print_r($_POST['libro'][2]['nombre']);  

echo "<br>";
echo "<br>";
//cantidad de libros
echo count($_POST['libro']); 

