<?php

// Cargar clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// Crear la tabla y añadir los libros
$tabla_libros = new TablaLibros();

$tabla_libros->addLibros();

$libros = $tabla_libros->tlibros;

$categorias = TablaLibros::getCategorias();

// Cargar la vista
include __DIR__ . '/views/index.view.php';
