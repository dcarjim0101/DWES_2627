<?php

/*
    controlador: update.php

    descripción: actualiza los detalles de un alumno en la tabla de alumnos.

    parámetro GET:
        - id: identificador del alumno a actualizar.
*/

// Cargar las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Obtener id del alumno desde la URL
$id = (int) ($_GET['id'] ?? 0);

// 2. Extraer los datos del formulario enviados por POST
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;
$curso = isset($_POST['curso']) ? (int) $_POST['curso'] : null;
$asignaturas_alumno = array_map('intval', $_POST['asignaturas'] ?? []);

// 3. Crear un nuevo objeto Alumno con los datos actualizados
$alumno_actualizado = new Alumno($id, $nombre, $apellidos, $email, $f_nacimiento, $curso, $asignaturas_alumno);

// 4. Crear la tabla y cargar los datos
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();

// 5. Obtener el índice del alumno a actualizar
$indice = $tabla_alumnos->getIndiceById($id);

// 6. Actualizar el alumno (si existe)
if ($indice !== null) {
    $tabla_alumnos->update($alumno_actualizado, $indice);
}

// 7. Cargar los datos para la vista principal
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 8. Cargar la vista principal
require_once __DIR__ . '/views/index.view.php';
