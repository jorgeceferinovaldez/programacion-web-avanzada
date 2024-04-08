<?php

############ 1
print("########################\n");
print("Estructura while \n");
print("########################\n");

$n = 1;

while($n <= 10){
    echo "$n ,";
    $n++;
}

############# 2
print("\n\n");
print("########################\n");
print("Estructura do while \n");
print("########################\n");

$n = 1;
do {
    echo "$n ,";
    $n++;
} while($n <= 10);

############# 3
print("\n\n");
print("########################\n");
print("Estructura for \n");
print("########################\n");

$n =1;
for($n; $n <= 10; $n++){
    echo "$n ,";
}

print("\n");

$n =1;
for($n; $n >= -10; $n--){
    echo "$n ,";
}

############# 4
print("\n\n");
print("########################\n");
print("Estructura for clausula break \n");
print("########################\n");

$n =1;
for($i = 1; $i <= 10; $i++){
    echo "$i ,";
    if ($i === 5){
        break;
    };
}

############# 5
print("\n\n");
print("########################\n");
print("Estructura foreach \n");
print("########################\n");

$numeros = ['uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez'];

foreach($numeros as $numero){
    echo "$numero, ";
}

print("\n");

foreach(['uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez'] as $numero){
    echo "$numero, ";
}
