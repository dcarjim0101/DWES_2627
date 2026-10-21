<?php

/*
    controlador procesar
    descripcion: procesa los datos del formulario metodo get
*/

$email = $_GET['email'];
$password = $_GET['password'];

// mostrar los datos recibidos en el formulario
echo "<h1>datos recibidos del formulario</h1>";
echo "<p>email: $email</p>";
echo "<p>password: $password</p>";