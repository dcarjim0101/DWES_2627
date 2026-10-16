<?php

/*
    tipo de arrays:
    - escalares o indexados
*/

// array escalar o indexado
// $colores = array("rojo", "verde", "azul", "amarillo");

$colores = ["rojo", "verde", "azul", "amarillo"];

// acceder a un elemento del array
echo $colores[0]; // rojo

// recorrer un array con un bucle for
for ($i = 0; $i < count($colores); $i++) {
    echo $colores[$i] . "<br>";
}

// recorrer un array con un bucle foreach
foreach ($colores as $color) {
    echo $color . "<br>";
}

// agregar elemento array
$colores[] = "naranja"; // agrega al final del array

// eliminar elemento array
unset($colores[1]); // elimina el elemento en la posición 1 (verde)

// recorrer array mostrando indice y valor
foreach ($colores as $indice => $color) {
    echo "Indice: $indice, Color: $color <br>";
}

// modificar elemento array
$colores[2] = "violeta"; // cambia el valor del elemento en la posición 2 (azul) a violeta