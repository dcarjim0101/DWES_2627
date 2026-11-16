<?php

require 'class/Articulo.php';
require 'class/Tarticulos.php';

session_start();

$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

$errores = $_SESSION['errores'] ?? [];
$old = $_SESSION['old'] ?? [];
unset($_SESSION['errores'], $_SESSION['old']);

require 'views/new.view.php';