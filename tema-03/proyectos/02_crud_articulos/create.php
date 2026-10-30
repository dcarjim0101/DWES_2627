<?php

/**
 * create.php
 *
 * Crea un nuevo artículo a partir de los datos enviados desde el formulario
 * de new.view.php y muestra el listado con el artículo añadido.
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

// Extraer los datos del formulario
$descripcion = htmlspecialchars(trim($_POST['descripcion'] ?? ''));
$modelo = htmlspecialchars(trim($_POST['modelo'] ?? ''));
$categorias = htmlspecialchars(trim($_POST['categorias'] ?? ''));
$unidades = (int) ($_POST['unidades'] ?? 0);
$precio = (float) ($_POST['precio'] ?? 0);

// Proceso de validación de los datos del formulario
if ($descripcion === '' || $modelo === '') {
    header('Location: new.php');
    exit;
}

// Obtener el array de artículos existente
$articulos = get_articulos();

// Obtener id del nuevo artículo
$new_articulo_id = obtener_id_nuevo_articulo($articulos);

// Crear array asociativo del nuevo artículo
$new_articulo = [
    'id' => $new_articulo_id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => categorias_a_array($categorias),
    'unidades' => $unidades,
    'precio' => $precio
];

// Agregar el nuevo artículo al array de artículos
$articulos[] = $new_articulo;

// Views
include 'views/index.view.php';
