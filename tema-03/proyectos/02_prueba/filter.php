<?php

/**
 * filter.php
 *
 * Filtra la tabla de artículos por un texto (sin distinguir mayúsculas y
 * minúsculas) buscando en descripcion, modelo y categorias.
 * Ejemplo: filter.php?prompt=raton
 * Si el término está vacío se muestran todos los artículos.
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
// Obtener el término de búsqueda que se pasa por la URL
$termino = trim($_GET['prompt'] ?? '');

// Cargar el array de artículos
$articulos = get_articulos();

// Filtrar solo si hay término (se conservan los índices originales)
if ($termino !== '') {
    $resultado = [];

    foreach ($articulos as $indice => $articulo) {
        // Campos de texto donde se busca
        $textos = [
            $articulo['descripcion'],
            $articulo['modelo'],
            implode(' ', $articulo['categorias'])
        ];

        foreach ($textos as $texto) {
            if (mb_stripos($texto, $termino) !== false) {
                $resultado[$indice] = $articulo;
                break;
            }
        }
    }

    $articulos = $resultado;
}

// Views
include 'views/index.view.php';
