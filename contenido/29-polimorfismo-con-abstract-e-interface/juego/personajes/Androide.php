<?php
namespace Juego\Personajes;

use Juego\IPersonaje;

#El robot implementara la interface de personaje
class Androide implements IPersonaje
{
    #Implementamos si o si los metodos de la interface
    public function saludar(){
        return 'Hola ser basado en carbono.';
    }

    public function atacar(){
        return 'El personaje ataca';
    }
}