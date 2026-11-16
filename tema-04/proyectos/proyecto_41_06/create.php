<?php

require 'class/Articulo.php';
require 'class/Tarticulos.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: new.php');
    exit;
}

$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

$descripcion = trim($_POST['descripcion'] ?? '');
$modelo = trim($_POST['modelo'] ?? '');
$marca = $_POST['marca'] ?? '';
$cats = $_POST['categorias'] ?? [];
$unidades = $_POST['unidades'] ?? '';
$precio = $_POST['precio'] ?? '';

$errores = [];

if ($descripcion === '') {
    $errores[] = 'La descripción es obligatoria.';
}

if ($modelo === '') {
    $errores[] = 'El modelo es obligatorio.';
}

if (filter_var($marca, FILTER_VALIDATE_INT) === false || !isset($marcas[(int)$marca])) {
    $errores[] = 'Selecciona una marca válida.';
}

if (!is_array($cats)) {
    $cats = [];
}
foreach ($cats as $c) {
    if (filter_var($c, FILTER_VALIDATE_INT) === false || !isset($categorias[(int)$c])) {
        $errores[] = 'Alguna de las categorías seleccionadas no es válida.';
        break;
    }
}

if (filter_var($unidades, FILTER_VALIDATE_INT) === false || (int)$unidades < 0) {
    $errores[] = 'Las unidades deben ser un número entero igual o mayor que cero.';
}

if ($precio === '' || !is_numeric($precio) || (float)$precio < 0) {
    $errores[] = 'El precio debe ser un número igual o mayor que cero.';
}

if (!empty($errores)) {
    $_SESSION['errores'] = $errores;
    $_SESSION['old'] = $_POST;
    header('Location: new.php');
    exit;
}

if (isset($_SESSION['tarticulos'])) {
    $coleccion = $_SESSION['tarticulos'];
} else {
    $coleccion = new Tarticulos();
    $coleccion->addArticulos();
}

$articulo = new Articulo(
    $coleccion->getNuevoId(),
    $descripcion,
    $modelo,
    (int)$marca,
    array_map('intval', $cats),
    (int)$unidades,
    (float)$precio
);

$coleccion->addArticulo($articulo);

$_SESSION['tarticulos'] = $coleccion;

$articulos = $coleccion->getTarticulos();

require 'views/index.view.php';