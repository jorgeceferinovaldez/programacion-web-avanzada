<?php
require_once 'tienda/Producto.php';
require_once 'tienda/ProductoPerecedero.php';
require_once 'tienda/ProductoNoPerecedero.php';

use Tienda\{Producto, ProductoPerecedero, ProductoNoPerecedero};


# Crear un producto perecedero
$productoPerecedero = new ProductoPerecedero('Leche', 1.50, '2020-12-31');

var_dump($productoPerecedero);

# Crear un producto no perecedero
$productoNoPerecedero = new ProductoNoPerecedero('Placa de video', 2.50, 'Nvidia');

var_dump($productoNoPerecedero);
