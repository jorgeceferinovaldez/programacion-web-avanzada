<?php

var_dump($_FILES); // $_FILES es un array asociativo que contiene información sobre los archivos subidos mediante el formulario

if (isset($_FILES['archivo'])) {
    // guardar el archivo en el servidor
    move_uploaded_file($_FILES['archivo']['tmp_name'], 'uploads/' . $_FILES['archivo']['name']);
    // move_uploaded_file() mueve un archivo subido a una nueva ubicación
}

if ($_FILES['archivo']['name'] === '0') {
    echo 'No se ha subido ningún archivo';
} else {
    echo 'El archivo se ha subido correctamente';    
}