<?php

/**
 * new.php
 *
 * Muestra el formulario para añadir un nuevo alumno. No se guarda en base de datos, solo en memoria.
 */

// Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Cargar cursos (lista desplegable) y asignaturas (lista checkbox)
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// Views
include __DIR__ . '/views/new.view.php';
