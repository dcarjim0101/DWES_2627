<?php
// modelo

// calculos

$v0 = (float) $_POST['velocidad_inicial'];
$a = (float) $_POST['aceleracion'];
$t = (float) $_POST['tiempo_transcurrido'];
$m = (float) $_POST['masa'];


$v  = $v0 + $a * $t;                    // velocidad final
$e  = $v0 * $t + 0.5 * $a * $t ** 2;    // espacio recorrido
$f  = $m * $a;                          // fuerza neta
$ec = 0.5 * $m * $v ** 2;               // energia cinética final

// vista
include 'views/view.resultados.php';
?>