<?php
namespace Tienda;

class Producto {
    protected $nombre;
    protected $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    // Método protected
    protected function detallesProducto() {
        return "Nombre: " . $this->nombre . ", Precio: " . $this->precio;
    }
}


