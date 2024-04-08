<?php
# Polimorfismo usando abstraccion de clases e interfaces
require_once 'juego/Personaje.php';
require_once 'juego/personajes/Alien.php';
require_once 'juego/personajes/Androide.php';
require_once 'juego/personajes/Soldado.php';

use Juego\Personajes\{Alien, Androide, Soldado};

$objetoSoldado = new Soldado();

var_dump($objetoSoldado->saludar()); // Metodo de la clase Soldado
var_dump($objetoSoldado->atacar()); // Metodo de la clase abstracta Personaje

echo '<hr>';

$objetoAlien = new Alien();
var_dump($objetoAlien->saludar()); // Metodo de la clase Alien
var_dump($objetoAlien->atacar()); // Metodo de la clase abstracta Personaje

echo '<hr>';

$objetoAndroide = new Androide();
var_dump($objetoAndroide->saludar()); // Metodo de la clase Alien definido por interface
var_dump($objetoAndroide->atacar()); // Metodo de la clase Alien definido por interface