<?php

//var_dump($_FILES); // $_FILES es un array asociativo que contiene información sobre los archivos subidos mediante el formulario

if (isset($_FILES['archivo'])){
    foreach($_FILES['archivo']['name'] as $k => $archivo){
        if (!empty($archivo)){
            move_uploaded_file(
                $_FILES['archivo']['tmp_name'][$k], 'uploads/' . $archivo);    
        }
    }
}

