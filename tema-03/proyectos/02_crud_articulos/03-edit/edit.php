<?php
/*
edit.php

Permite crear un nuevo libro en la base de datos.
Muestra una lista de libros y permite agregar, editar y eliminar libros.

Tabal libros:
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - titulo (VARCHAR(255))
    - autor (VARCHAR(255))
    - editorial (VARCHAR(255))
    - generos
    - precio

*/

// cargar librerias
require_once 'libs/functions.php';

// models

// negociado

// obtener el indice del libro a editar desde la URL

// edit.php?indice=0 - edito el primer libro
$indice = htmlspecialchars($GET['indice'] ?? null);

// validar el indice recibido

// cargar el array de libros
$libros = get_libros();

// obtenemos el libro a editar
$libro = $libros['libros'];