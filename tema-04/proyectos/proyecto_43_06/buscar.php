<?php

/*
    controlador: buscar.php   (opcional)

    descripción: muestra los alumnos cuyo nombre, apellidos, email, curso o asignaturas
                 contienen el texto buscado.

    parámetro GET:
        - q: texto a buscar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Texto a buscar
$q = trim($_GET['q'] ?? '');

// 2. Crear la tabla, cargar los datos y buscar
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();
$alumnos = $tabla_alumnos->buscar($q);

// 3. Cargar los datos para la vista principal
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();
$titulo = 'Resultados de la búsqueda: "' . $q . '"';

// 4. Cargar la vista principal
require_once __DIR__ . '/views/index.view.php';
