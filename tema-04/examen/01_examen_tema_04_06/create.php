<?php

// Cargar clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// Crear la tabla y añadir los libros
$tabla_libros = new TablaLibros();
$tabla_libros->addLibros();

// Datos del formulario
$titulo = $_POST['titulo'] ?? null;
$fecha_publicacion = $_POST['fecha_publicacion'] ?? null;
$autor = $_POST['autor'] ?? null;
$categoria = isset($_POST['categoria']) ? (int) $_POST['categoria'] : null;
$etiquetas_libro = array_map('intval', $_POST['etiquetas'] ?? []);
$numero_paginas = isset($_POST['numero_paginas']) ? (int) $_POST['numero_paginas'] : null;
$stock = isset($_POST['stock']) ? (int) $_POST['stock'] : null;
$precio = isset($_POST['precio']) ? (float) $_POST['precio'] : null;

// Crear el libro nuevo y añadirlo
$id = $tabla_libros->getNuevoId();

$libro = new Libro($id, $titulo, $fecha_publicacion, $autor, $categoria, $etiquetas_libro, $numero_paginas, $stock, $precio);

$tabla_libros->create($libro);

// Datos para la vista
$libros = $tabla_libros->tlibros;
$categorias = TablaLibros::getCategorias();

// Cargar la vista
require_once __DIR__ . '/views/index.view.php';
