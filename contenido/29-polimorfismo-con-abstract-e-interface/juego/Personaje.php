<?php
namespace Juego;

#Clase abstracta
#No se puede instanciar
#Se usa para heredar a otras clases
#Puede tener metodos abstractos
#Puede tener metodos normales

abstract class Personaje
{
    #Metodos abstractos
    abstract public function saludar();
    
    #Metodos normales
    public function atacar(){
        return 'El personaje ataca';
    }
}

# Interfaces
# No se puede instanciar
# Se usa para heredar a otras clases
# Solo puede tener metodos abstractos
# No puede tener metodos normales
# Se usa para definir un contrato de metodos
interface IPersonaje
{
    #Metodos abstractos
    public function saludar();
    public function atacar();
}
