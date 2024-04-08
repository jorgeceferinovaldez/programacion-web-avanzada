<?php
namespace Juego\Personajes;

use Juego\Personaje;

class Alien extends Personaje
{
    #Implementamos si o si el metodo bastracto de la clase abstracta
    public function saludar(){
        return 'El Alien sisea';
    }
}