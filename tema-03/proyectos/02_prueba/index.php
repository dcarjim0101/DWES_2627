<?php

/**
 * index.php
 *
 * Página principal del proyecto CRUD de artículos.
 * Muestra la tabla de artículos ordenada por id.
 *
 * @package    CRUD Artículos
 * @author     David Carrero Jiménez
 * @version    1.0
 *
 * Tabla artículos:
 *  - id (int)
 *  - descripcion (string)
 *  - modelo (string)
 *  - categorias (array)
 *  - unidades (int)
 *  - precio (float)
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
$articulos = get_articulos();

// Views
include 'views/index.view.php';
