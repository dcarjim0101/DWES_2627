<?php
// modelo

// definir constantes
define("G", 9.81); // gravedad en m/s^2

// obtener valores del formulario
$velocidad_inicial = $_POST['velocidad_inicial'] ?? 0;
$angulo_lanzamiento = $_POST['angulo_lanzamiento'] ?? 0;

// convertir ángulo a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// calcular la velocidad inicial horizontal
$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radianes);

// calcular la velocidad inicial vertical
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radianes);

// calcular la altura máxima
$altura_maxima = pow($velocidad_inicial_vertical, 2) / (2 * G);

// calcular el tiempo de vuelo
$tiempo_vuelo = (2 * $velocidad_inicial_vertical) / G;

?>