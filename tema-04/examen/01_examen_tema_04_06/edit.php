<?php

// Cargar clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// Id del libro a editar
$id = (int) ($_GET['id'] ?? 0);

// Crear la tabla y añadir los libros
$tabla_libros = new TablaLibros();
$tabla_libros->addLibros();

// Buscar el libro
$indice = $tabla_libros->getIndiceById($id);

if ($indice === null) {
    echo 'El libro no existe';
    exit;
}

$libro = $tabla_libros->read($indice);

$categorias = TablaLibros::getCategorias();
$etiquetas = TablaLibros::getEtiquetas();

// Cargar la vista
require_once __DIR__ . '/views/edit.view.php';
