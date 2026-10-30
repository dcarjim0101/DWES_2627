<?php

/**
 * update.php
 *
 * Actualiza un artículo existente con los datos del formulario de edición
 * y muestra el listado. Recibe el índice por URL: update.php?indice=0
 *
 * @package    CRUD Artículos
 * @author     David Carrero Jiménez
 * @version    1.0
 *
 * Tabla artículos: id, descripcion, modelo, categorias (array), unidades, precio
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del artículo a actualizar desde la URL
$indice = filter_var($_GET['indice'] ?? null, FILTER_VALIDATE_INT);

// Cargar el array de artículos
$articulos = get_articulos();

// Validar el índice recibido
if ($indice === false || !isset($articulos[$indice])) {
    header('Location: index.php');
    exit;
}

// Cargo los datos del formulario
$descripcion = htmlspecialchars(trim($_POST['descripcion'] ?? ''));
$modelo = htmlspecialchars(trim($_POST['modelo'] ?? ''));
$categorias = htmlspecialchars(trim($_POST['categorias'] ?? ''));
$unidades = (int) ($_POST['unidades'] ?? 0);
$precio = (float) ($_POST['precio'] ?? 0);

// Validación de los datos del formulario
if ($descripcion === '' || $modelo === '') {
    header('Location: edit.php?indice=' . $indice);
    exit;
}

// Crear array asociativo con los datos del artículo editado (conserva el id)
$edit_articulo = [
    'id' => $articulos[$indice]['id'],
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => categorias_a_array($categorias),
    'unidades' => $unidades,
    'precio' => $precio
];

// Actualizar el artículo en el array de artículos
$articulos[$indice] = $edit_articulo;

// Views
include 'views/index.view.php';
