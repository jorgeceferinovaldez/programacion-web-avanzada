<?php

############ 1 Definición Formal
print ("Definición formal\n");
$frutas = array(
    'manzana',  // 0
    'pera',     // 1
    'naranja',  // 2
    'banana'    // 3
);

print_r($frutas);

print ("\n");

var_dump($frutas);

print ("\n");

# Imprimo el segundo elemento
print($frutas[1]);

############ 2 Definición mas corta (estilo javascript)
print ("\n\n");
print ("Definición corta\n");
$frutas = [
    'manzana',  // 0
    'pera',     // 1
    'naranja',  // 2
    'banana'    // 3
];

print_r($frutas);

print ("\n");

var_dump($frutas);

print ("\n");

############ 3 Definición de indices
print ("\n\n");

$gpus = [
    'nvidia' => 'RTX 3080 TI',
    'amd' => 'RX 6600 XT',
    'intel' => 'ARC A770'
];

print_r($gpus);

echo "\n";
echo $gpus['amd'];

############ 4 Agregación de elementos a un array
print ("\n\n");

$frutas = [
    'manzana',  // 0
    'pera',     // 1
    'naranja',  // 2
    'banana'    // 3
];

$frutas[] = 'kiwi'; // Agrego un elemento al final del array

print_r($frutas);

############ 5 Arrays de 2 dimensiones o matrices
print ("\n\n");

$escuela = [
    'primaria' => [
        'primer_grado' => 'Juan Perez',
        'segundo_grado' => 'Maria Gomez',
        'tercer_grado' => 'Pedro Martinez',
        'cuarto_grado' => 'Julio Sanchez',
        'quinto_grado' => 'Miguel Gonzalez',
        'sexto_grado' => 'Carlos Rodriguez',
        'septimo_grado' => 'Ana Lopez'
    ],
    'secundaria' => [
        'primer_anio' => 'Luis Acosta',
        'segundo_anio' => 'Jorge Fernandez',
        'tercer_anio' => 'Marta Diaz',
        'cuarto_anio' => 'Susana Gimenez',
        'quinto_anio' => 'Mariano Lopez'
    ]
];

print_r($escuela);

# Recorremos el arreglo
foreach($escuela as $nivind => $nivel){
    echo "Nivel: $nivind \n";
    foreach($nivel as $grado => $profesor){
        echo "$grado: $profesor \n";
    }
}

############ 6 Arrays Multidimensionales
print ("\n\n");

$escuela = [
    'primaria' => [
        'primer_grado' => 'Juan Perez',
        'segundo_grado' => 'Maria Gomez',
        'tercer_grado' => 'Pedro Martinez',
        'cuarto_grado' => 'Julio Sanchez',
        'quinto_grado' => 'Miguel Gonzalez',
        'sexto_grado' => 'Carlos Rodriguez',
        'septimo_grado' => [
            'maniana' => 'Ana Lopez',
            'tarde' => 'Jacinto Benavidez'
        ]
        
    ],
    'secundaria' => [
        'primer_anio' => 'Luis Acosta',
        'segundo_anio' => 'Jorge Fernandez',
        'tercer_anio' => 'Marta Diaz',
        'cuarto_anio' => 'Susana Gimenez',
        'quinto_anio' => 'Mariano Lopez'
    ]
];

print_r($escuela);

