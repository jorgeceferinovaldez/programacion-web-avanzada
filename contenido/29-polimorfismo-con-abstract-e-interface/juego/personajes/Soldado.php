<?php
namespace Juego\Personajes;

use Juego\Personaje;

class Soldado extends Personaje
{
    #Implementamos si o si el metodo bastracto de la clase abstracta
    public function saludar(){
        return 'El soldado saluda';
    }
}