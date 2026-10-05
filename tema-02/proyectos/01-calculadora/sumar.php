<?php

/*
    controlador = sumar.php
    Proyecto: proyecto 2.1 - calculadora basica
    descripcion: calculadora de operaciones basicas
        - suma
        - resta
        - multiplicacion
        - division
        - potencia
        - ...
    Alumno: David Carrero Jiménez
    Fecha: 10/06/2026
*/

// modelo

//negociado
// recoger los valores del formulario
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

// realizar la operación de suma
$resultado = $valor1 + $valor2;

$operacion = "Suma";

// vista
include 'views/resultado.view.php';