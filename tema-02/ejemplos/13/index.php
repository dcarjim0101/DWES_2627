<?php

// is_null() devuelve verdadero:
// asigno valor nulo a la variable
// cuando la variable no ha sido definida
// cuando este definida sin valor asignado
// cuando la variable se ha eliminado con unset()

/*
    isset(): determina si una variable ha sido declarada y su valor no es nulo
    devuelve verdadero:
    - cuando la  variable ha sido definida:
*/

$var = null;

if (is_null($var)) {
    echo "la variable es nula <br>";
} else {
    echo "la variable no es nula <br>";
}

$var1 = null;
if (isset($var1)) {
    echo "la variable ha sido definida <br>";
} else {
    echo "la variable no ha sido definida <br>";
}

$var2 = 10;
if (isset($var2)){
    echo "la variable ha sido definida <br>";
} else {
    echo "la variable no ha sido definida <br>";
}