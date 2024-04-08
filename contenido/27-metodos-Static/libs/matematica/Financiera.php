<?php
namespace Libs\Matematica;

class Financiera{
    # Atributos
    private float $capital;
    private float $tasa;
    private int $periodo;
    
    # Metodos
    #Metodo constructor
    public function __construct(float $capital, float $tasa, int $periodo){
        $this->capital = $capital;
        $this->tasa = $tasa;
        $this->periodo = $periodo;
    }

    #Metodo destructor
    public function __destruct(){
        echo "El objeto se destruyo";    
        #Aqui se puede hacer un cierre de conexion a la base de datos
        #o liberar recursos    
    }

    public function tea() : float{
        // capital * (1 + tasa) ^ periodo  
        return ($this->capital * (1 + $this->tasa) ** $this->periodo);
    }    
}