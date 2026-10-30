<?php

/**
 * show.php
 *
 * Muestra todos los datos de un artículo en modo solo lectura.
 * Recibe el índice por URL: show.php?indice=0 (muestra el primer artículo).
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
// Obtener el indice del artículo a mostrar desde la URL
$indice = filter_var($_GET['indice'] ?? null, FILTER_VALIDATE_INT);

// Cargar el array de artículos
$articulos = get_articulos();

// Validar el índice recibido
if ($indice === false || !isset($articulos[$indice])) {
    header('Location: index.php');
    exit;
}

// Obtenemos el artículo a mostrar
$articulo = $articulos[$indice];

// Views
include 'views/show.view.php';
