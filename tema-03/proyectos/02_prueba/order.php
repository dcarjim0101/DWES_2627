<?php

/**
 * order.php
 *
 * Ordena la tabla de artículos por un campo y un sentido (asc/desc).
 * Ejemplo: order.php?campo=precio&sentido=desc
 * El orden solo afecta a la presentación; se conservan los índices originales
 * para que editar, eliminar y mostrar sigan actuando sobre el artículo correcto.
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
$campos_permitidos = ['id', 'descripcion', 'modelo', 'categorias', 'unidades', 'precio'];
$campos_numericos = ['id', 'unidades', 'precio'];

// Obtener y validar el campo y el sentido (si no son válidos, orden por defecto)
$campo = $_GET['campo'] ?? '';
$sentido = strtolower($_GET['sentido'] ?? 'asc');

if (!in_array($campo, $campos_permitidos, true)) {
    $campo = 'id';
}
if (!in_array($sentido, ['asc', 'desc'], true)) {
    $sentido = 'asc';
}

// Cargar el array de artículos
$articulos = get_articulos();

// Ordenar (uasort conserva las claves/índices originales)
uasort($articulos, function ($a, $b) use ($campo, $sentido, $campos_numericos) {
    if (in_array($campo, $campos_numericos, true)) {
        // Campos numéricos: comparación numérica
        $resultado = $a[$campo] <=> $b[$campo];
    } else {
        // Campos de texto: sin distinguir mayúsculas y minúsculas
        $va = is_array($a[$campo]) ? implode(', ', $a[$campo]) : $a[$campo];
        $vb = is_array($b[$campo]) ? implode(', ', $b[$campo]) : $b[$campo];
        $resultado = strcmp(mb_strtolower($va), mb_strtolower($vb));
    }

    return $sentido === 'desc' ? -$resultado : $resultado;
});

// Views
include 'views/index.view.php';
