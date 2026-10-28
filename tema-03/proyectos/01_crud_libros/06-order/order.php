<?php

/**
 * order.php
 *
 * permite ordenar la tabla de libros por diferentes criterios
 *
 * @package    CRUD Libros
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  libros:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - titulo (VARCHAR(255))
    *  - autor (VARCHAR(255))
    *  - editorial (VARCHAR(255))
    *  - generos 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el criterio de ordenación siempre ASCENDENTE
// order.php?criterio=titulo - ordenar la tabla de libros por titulo
$criterio = htmlspecialchars($_GET['criterio'] ?? null);

// Validar el criterio recibido

// Cargar el array de libros
$libros = get_libros();

// Ordenamos el array de libros segun el criterio recibido
$array_criterio = array_column($libros, $criterio);
array_multisort($array_criterio, SORT_ASC, $libros);

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';



