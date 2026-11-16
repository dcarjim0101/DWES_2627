<?php

require 'class/Articulo.php';
require 'class/Tarticulos.php';

session_start();

if (isset($_SESSION['tarticulos'])) {
    $coleccion = $_SESSION['tarticulos'];
} else {
    $coleccion = new Tarticulos();
    $coleccion->addArticulos();
    $_SESSION['tarticulos'] = $coleccion;
}

$articulos = $coleccion->getTarticulos();
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

require 'views/index.view.php';