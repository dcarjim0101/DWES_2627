<?php

/**
 * new.php
 *
 * Muestra el formulario para añadir un nuevo artículo al array de alumnos. No se guarda en base de datos, solo en memoria.
 *
 * @package    CRUD Artículos
 * @author     Tu Nombre
 * @version    1.0
 *
 * Tabla alumnos:
 *  - id
 *  - nombre
 *  - apellidos
 *  - email
 *  - fecha nacimiento
 *  - curso
 *  - asignaturas
 */

// Cargar clases
require_once __DIR__ . '/class/Alumnos.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// Models - no lo necesitamos NO BASE DE DATOS

// 1. Cargar el array de marcas - es  metodo estático, no necesitamos crear un objeto de la clase TablaAlumnos
$marcas = TablaAlumnos::getMarcas();

// 2. Cargar el array de categorías - es  metodo estático, no necesitamos crear un objeto de la clase TablaAlumnos
$categorias = TablaAlumnos::getCategorias();

// Views
include __DIR__ . '/views/new.view.php';