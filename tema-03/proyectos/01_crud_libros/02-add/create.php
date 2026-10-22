<?php
/*
create.php

Permite crear un nuevo libro a partir de los datos enviados en el formulario.
Muestra una lista de libros y permite agregar, editar y eliminar libros.

Tabal libros:
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - titulo (VARCHAR(255))
    - autor (VARCHAR(255))
    - editorial (VARCHAR(255))
    - generos
    - precio

*/

// Caragr librerías
require_once 'libs/functions.php';

// Models

// Negociado

// Extraer los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$autor = htmlspecialchars($_POST['autor'] ?? '');
$editorial = htmlspecialchars($_POST['editorial'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$precio = floatval($_POST['precio'] ?? 0);

// Proceso de validación de datos del formulario

// Crear un array asociativo con los datos del libro
$newbook = [
    'id'=> null,
    'titulo' => $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'generos' => explode(', ', $generos),
    'precio' => $precio
];

// Obtener el array libros existente
$libros = get_libros();

// Obtener id del nuevo libro creado
$new_book_id = obtener_id_nuevo_libro($libros);



// Views
include 'views/index.view.php';