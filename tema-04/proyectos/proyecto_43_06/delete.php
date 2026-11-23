<?php

/*
    controlador: delete.php

    descripción: elimina un alumno de la tabla a partir de su id y muestra el listado.

    parámetro GET:
        - id: identificador del alumno a eliminar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Obtener id del alumno desde la URL
$id = (int) ($_GET['id'] ?? 0);

// 2. Crear la tabla y cargar los datos
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();

// 3. Obtener el índice del alumno
$indice = $tabla_alumnos->getIndiceById($id);

// 4. Eliminar el alumno (si existe)
if ($indice !== null) {
    $tabla_alumnos->delete($indice);
}

// 5. Cargar los datos para la vista principal
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 6. Cargar la vista principal
require_once __DIR__ . '/views/index.view.php';
