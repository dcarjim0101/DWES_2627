<?php

/**
 * delete.php
 *
 * Elimina un artículo del listado. El índice se recibe por POST (campo oculto
 * "indice"), de modo que borrar no se ejecuta al visitar un enlace.
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
// Solo se admite el borrado por POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Obtener el indice del artículo a eliminar
$indice = filter_var($_POST['indice'] ?? null, FILTER_VALIDATE_INT);

// Cargar el array de artículos
$articulos = get_articulos();

// Validar que el índice corresponde a un artículo existente
if ($indice === false || !isset($articulos[$indice])) {
    header('Location: index.php');
    exit;
}

// Elimino el artículo y reindexo el array
unset($articulos[$indice]);
$articulos = array_values($articulos);

// Views
include 'views/index.view.php';
