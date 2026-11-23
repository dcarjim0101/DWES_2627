<?php

/*
    controlador: create.php
    descripción: añade un nuevo alumno al array de alumnos.
*/

// Cargamos las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Creamos la tabla y cargamos los datos
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();

// 2. Cargamos los detalles del formulario (validación no se hace)
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;
$curso = isset($_POST['curso']) ? (int) $_POST['curso'] : null;
$asignaturas_alumno = array_map('intval', $_POST['asignaturas'] ?? []);

// 3. Generamos el id del nuevo alumno (mayor id + 1)
$id = $tabla_alumnos->getNuevoId();

// 4. Creamos el objeto Alumno
$alumno = new Alumno($id, $nombre, $apellidos, $email, $f_nacimiento, $curso, $asignaturas_alumno);

// 5. Lo añadimos a la tabla
$tabla_alumnos->create($alumno);

// 6. Cargamos los datos para la vista principal
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 7. Cargamos la vista principal
require_once __DIR__ . '/views/index.view.php';
