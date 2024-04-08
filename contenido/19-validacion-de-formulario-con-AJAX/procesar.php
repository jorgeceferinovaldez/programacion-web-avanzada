<?php

$validaciones = [];

if (!empty($_POST)) {
    if (empty($_POST['nombre'])) {
        $validaciones['nombre'] = 'El nombre es obligatorio';
    } else if (strlen($_POST['nombre']) < 3) {
        $validaciones['nombre'] = 'El nombre debe tener al menos 3 caracteres';
    }
    
    if (empty($_POST['correo'])) {
        $validaciones['correo'] = 'El correo electrónico es obligatorio';
    } else if (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
        $validaciones['correo'] = 'El correo electrónico no es válido';
    }
    
    if (empty($_POST['fecha'])) {
        $validaciones['fecha'] = 'La fecha de nacimiento es obligatoria';
    } else if (!preg_match('/^\d{2}-\d{2}-\d{4}$/', $_POST['fecha'])) {
        $validaciones['fecha'] = 'La fecha de nacimiento no es válida';
    } else {
        list($dia, $mes, $anio) = explode('-', $_POST['fecha']);
        if (!checkdate($mes, $dia, $anio)) {
            $validaciones['fecha'] = 'La fecha de nacimiento no es válida';
        }
    }
    
    if (empty($_POST['web'])) {
        $validaciones['web'] = 'La página web es obligatoria';
    } else if (!filter_var($_POST['web'], FILTER_VALIDATE_URL)) {
        $validaciones['web'] = 'La página web no es válida';
    }
    
    if (empty($_POST['acepto'])) {
        $validaciones['acepto'] = 'Debes aceptar las condiciones de registro';
    } else if ($_POST['acepto'] != 1) {
        $validaciones['acepto'] = 'Debes aceptar las condiciones de registro';
    }

    #var_dump($validaciones);

    # Armamos la respuesta en formato JSON
    echo json_encode([
        'response' => count($validaciones) === 0,
        'errors' => $validaciones
    ]);
}
 


