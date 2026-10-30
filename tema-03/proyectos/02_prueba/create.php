<?php

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado

// Extraer los datos del formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categorias = htmlspecialchars($_POST['categorias'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

// Proceso de validación de los datos del formulario

// Obtener el array de articulos existente
$articulos = get_articulos();

// Obtener id del nuevo articulo creado
$new_articulo_id = obtener_id_nuevo_articulo($articulos);

// Crear array asociativo del nuevo articulo
$new_articulo = [
    'id' => $new_articulo_id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => explode(', ', $categorias),
    'unidades' => $unidades,
    'precio' => $precio
];

// Agregar el nuevo articulos al array de articulos
$articulos[] = $new_articulo;



// Views
include 'views/index.view.php';