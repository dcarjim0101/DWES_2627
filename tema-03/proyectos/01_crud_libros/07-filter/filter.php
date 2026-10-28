<?php

/**
 * filter.php
 *
 * permite filtrar la tabla de libros a partir de una expresion regular que se pasa por la URL
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
// Obtener el prompt de busqueda que se pasa por la URL
// filter.php?prompt=cervantes
$prompt = htmlspecialchars($_GET['prompt'] ?? null);

// Validar el criterio regular

// Cargar el array de libros
$libros = get_libros();

// filtrar el array de libros a partir del prompt
$aux = [];
foreach ($libros as $libros){
    // recorro cada campo del libro
    if (array_search($prompt, $libro) !== false){
        // si el libro contiene la expresion de busqueda, añado el libro al array auxiliar
        $aux[] = $libro;
    }
}

$libros = $aux;

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';