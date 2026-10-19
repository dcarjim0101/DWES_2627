<?php

/*
    parametros por valor o referencia: 
    - por valor: se pasa una copia del valor de la variable a la funcion.
    Los cambios realizados en la variable dentro de la funcion no afectan al parametro.

    - por referencia:
*/

$a = 2;
function sumar_dos(&$x){
    $x += 2;
    return $x;
}

$a = 2;
echo sumar_dos($a); // 3
echo $a; // 2

// parametros por referencia
function