<?php

/*
 controlador: potencia.php

 Proyecto: proyecto 2.1 - calculadora básica
 Descripción: Calculadora de operaciones básicas:
    - suma
    - resta
    - multiplicación
    - división
    - potencia
    - ...
 Alumno: David Carrero Jiménez
 Fecha: 6/10/2026
 
*/

// Modelo

// Negociado del controlador
// Recoger los valores del formulario

$valor1 =  $_POST['valor1'];
$valor2 =  $_POST['valor2'];

// Realizar la operación de potencia
$resultado = pow($valor1, $valor2);

$operacion = "Potencia";

// Vista
include "views/resultado.view.php";