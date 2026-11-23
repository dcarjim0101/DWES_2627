<?php

/**
 * index.php
 *
 * Página principal del proyecto CRUD de alumnos. Muestra la tabla de alumnos,
 * cada alumno es un objeto de la clase Alumno.
 *
 * Tabla alumnos:
 *  - id, nombre, apellidos, email, f_nacimiento, curso (índice), asignaturas (array de índices)
 */

// Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// Models - no lo necesitamos NO BASE DE DATOS

// 1. Crear la tabla de alumnos (array de objetos de la clase Alumno)
$tabla_alumnos = new TablaAlumnos();

// 2. Añadir alumnos a la tabla
$tabla_alumnos->addAlumnos();

// 3. Obtener el array de alumnos
$alumnos = $tabla_alumnos->talumnos;

// 4. Obtener cursos y asignaturas (métodos estáticos)
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// Views
include __DIR__ . '/views/index.view.php';
