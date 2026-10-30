<?php

/**
 * edit.php
 *
 * Carga el artículo seleccionado y muestra el formulario de edición.
 * Recibe el índice por URL: edit.php?indice=0 (edita el primer artículo).
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
// Obtener el indice del artículo a editar desde la URL
$indice = filter_var($_GET['indice'] ?? null, FILTER_VALIDATE_INT);

// Cargar el array de artículos
$articulos = get_articulos();

// Validar el índice recibido
if ($indice === false || !isset($articulos[$indice])) {
    header('Location: index.php');
    exit;
}

// Obtenemos el artículo a editar
$articulo = $articulos[$indice];

// Views
include 'views/edit.view.php';
