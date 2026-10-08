<?php
/*
    Ejemplo 32. if, else, elseif y operador ternario
    descripcion: determinar el item de calificacion de un examen

    la calificacion sera:
        - suspenso
        -suficiente
        -bien
        -notable
        -sobresaliente
*/

$nota = 7; // devolver notable

// calcula item de calificacion
if ($nota < 0){
    echo "error, la nota debe estar entre 0 y 10";
} elseif ($nota < 5){
    echo "suspenso";
} elseif ($nota < 6){
    echo "suficiente";
} elseif ($nota < 7){
    echo "bien";
} elseif ($nota < 9){
    echo "notable";
} elseif ($nota < 10){
    echo "sobresaliente";
} else {
    echo "error, la nota debe estar entre 0 y 10";
}