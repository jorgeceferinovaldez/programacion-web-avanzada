<?php

namespace Tienda;

// Clase que hereda de Producto
class ProductoPerecedero extends Producto {
    private $fechaExpiracion;

    public function __construct($nombre, $precio, $fechaExpiracion) {
        parent::__construct($nombre, $precio);
        $this->fechaExpiracion = $fechaExpiracion;
    }

    public function getFechaExpiracion() {
        return $this->fechaExpiracion;
    }

    // Método que utiliza el método protected de la clase padre
    public function mostrarDetalles() {
        return $this->detallesProducto() . ", Fecha de expiración: " . $this->fechaExpiracion;
    }
}