<?php

namespace Tienda;

class ProductoNoPerecedero extends Producto {
    private $marca;

    public function __construct($nombre, $precio, $marca) {
        parent::__construct($nombre, $precio);
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }
}