<?php

/*
    controlador: ordenar.php   (opcional)

    descripción: muestra el listado de alumnos ordenado por un campo.

    parámetro GET:
        - campo: id | apellidos | email | f_nacimiento | curso  (por defecto, apellidos)
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Campo por el que ordenar
$campo = $_GET['campo'] ?? 'apellidos';

// 2. Crear la tabla, cargar los datos y ordenar
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();
$tabla_alumnos->ordenar($campo);

// 3. Cargar los datos para la vista principal
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();
$titulo = 'Tabla de alumnos ordenada por ' . $campo;

// 4. Cargar la vista principal
require_once __DIR__ . '/views/index.view.php';
