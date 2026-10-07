<?php
// Controlador: calcular.php
// Recibe los datos del formulario, calcula el lanzamiento y muestra el resultado.

// Constante de la gravedad (m/s^2)
define('GRAVEDAD', 9.8);

// Si se entra directamente sin enviar el formulario, volvemos al inicio
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$errores = [];
$velocidad = trim($_POST['velocidad_inicial'] ?? '');
$angulo = trim($_POST['angulo_lanzamiento'] ?? '');

// Validación
if ($velocidad === '' || !is_numeric($velocidad)) {
    $errores[] = 'La velocidad inicial debe ser un número válido.';
} elseif ((float)$velocidad <= 0) {
    $errores[] = 'La velocidad inicial debe ser mayor que 0.';
}

if ($angulo === '' || !is_numeric($angulo)) {
    $errores[] = 'El ángulo de lanzamiento debe ser un número válido.';
} elseif ((float)$angulo <= 0 || (float)$angulo >= 90) {
    $errores[] = 'El ángulo debe estar entre 0 y 90 grados (sin incluirlos).';
}

// Si hay errores, volvemos a mostrar el formulario con los mensajes
if (!empty($errores)) {
    include __DIR__ . '/views/index.view.php';
    exit;
}

$v0 = (float)$velocidad;
$a0 = (float)$angulo;

// Cálculos
$anguloRadianes = deg2rad($a0);                                          // Ángulo en radianes
$v0x = $v0 * cos($anguloRadianes);                                       // Velocidad inicial horizontal
$v0y = $v0 * sin($anguloRadianes);                                       // Velocidad inicial vertical
$xMax = (pow($v0, 2) * sin(2 * $anguloRadianes)) / GRAVEDAD;             // Alcance máximo
$yMax = (pow($v0, 2) * pow(sin($anguloRadianes), 2)) / (2 * GRAVEDAD);   // Altura máxima
$tiempoVuelo = 2 * $v0y / GRAVEDAD;                                      // Tiempo total de vuelo

include __DIR__ . '/views/calculos.view.php';