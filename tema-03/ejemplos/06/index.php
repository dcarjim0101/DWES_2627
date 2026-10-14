<?php

/*
    ejemplo 36. estructura switch como alternativa a if elseif
    descripcion: dada una nota, se ha de devolver el item de calificación
    - insuficiente
    - suficiente
    - bien
    - notable
    - sobresaliente
*/

$nota = 7;

// estructura switch - evalua un conjunto de condiciones
switch(true){
    case($nota < 5):
        echo 'insuficiente';
        break;
    case($nota < 6):
        echo 'suficiente';
        break;
    case($nota < 7):
        echo 'bien';
        break;
    case($nota < 9):
        echo 'notable';
        break;
    case($nota <= 10):
        echo 'sobresaliente';
        break;
    default:
        echo "nota no valida";
        break;
}
?>