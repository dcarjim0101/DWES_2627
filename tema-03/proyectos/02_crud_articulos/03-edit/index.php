<?php
/*
index.php

Pagina principal del proyecto CRUD de libros.
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
$libros = get_libros();

// Views
include 'views/index.view.php';