<?php

############ 1
print("########################\n");
print("Estructura if - else\n");
print("########################\n");

$a = 27;

if($a == 27){
    echo "La variable ingresada tiene el valor 27";
} else {
    echo "La variable ingresada no tiene el valor 27";
}

############# 2
print("\n\n");
print("########################\n");
print("Estructura if - else (2)\n");
print("########################\n");

$a = 27;

if($a === '27'){
    echo "La variable ingresada tiene el valor 27";
} else {
    echo "La variable ingresada no tiene el valor 27";
}

############# 3
print("\n\n");
print("##############################\n");
print("Estructura if - elif -else\n");
print("##############################\n");

$a = 27;

if($a === '27'){
    echo "La variable ingresada tiene el valor 27";
} elseif ($a === 28) {
    echo "La variable ingresada tiene el valor 28";
} else {
    echo "La variable ingresada no tiene el valor 27";
}

############# 4
# Booleanos 1
print("\n\n");
print("##############################\n");
print("Estructura if - else BOOLEANOS\n");
print("##############################\n");

$a = true;

if($a){
    echo "Correcto";
} elseif ($a === 28) {
    echo "Incorrecto";
} 

############# 5
# Booleanos 2 ALTERNATIVA
print("\n\n");
print("################################################\n");
print("Estructura if - else BOOLEANOS ALTERNATIVA CORTA\n");
print("################################################\n");

$a = true;

echo $a ? "Correcto" : "Incorrecto";

############# 7
# Switch
print("\n\n");
print("######\n");
print("Switch\n");
print("######\n");

$destino = "Mexico";

switch ($destino) {
    case 'Mexico':
        echo "El destino es Mexico\n";
        echo "El pasaje cuesta 1000 pesos\n";
        break;
    case 'Colombia':
        echo "El destino es Colombia\n";
        echo "El pasaje cuesta 2000 pesos\n";
        break;
    case 'España':
        echo "El destino es España\n";
        echo "El pasaje cuesta 3000 pesos\n";
        break;
    default:
        echo "El destino no esta registrado\n";
        break;
}
