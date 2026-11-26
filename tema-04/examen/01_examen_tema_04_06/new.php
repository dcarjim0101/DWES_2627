<?php

// Cargar clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// Datos para el formulario
$categorias = TablaLibros::getCategorias();
$etiquetas = TablaLibros::getEtiquetas();

// Cargar la vista
include __DIR__ . '/views/new.view.php';
