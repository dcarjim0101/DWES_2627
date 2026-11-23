<?php

/*
    controlador: show.php

    descripción: muestra todos los detalles de un alumno, incluida la edad.

    parámetro GET:
        - id: identificador del alumno a mostrar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Obtener id del alumno desde la URL
$id = (int) ($_GET['id'] ?? 0);

// 2. Crear la tabla y cargar los datos
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();

// 3. Buscar el alumno por su id
$alumno = $tabla_alumnos->getAlumnoById($id);

// Si no existe, volvemos al listado
if ($alumno === null) {
    header('Location: index.php');
    exit;
}

// 4. Cargar cursos y asignaturas para mostrar sus nombres
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 5. Cargar la vista de detalle
require_once __DIR__ . '/views/show.view.php';
