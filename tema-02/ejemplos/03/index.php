<?php
    $nombre = "Juan";
    $apellido = "Pérez López";
    $edad = 30;
    $poblacion = "Madrid";

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar valor HTML</title>
</head>
<body>
    <h1>ficha de alumnos:</h1>
    <?php
        // mostrar los valores de las variables en HTML
        echo "<b>Nombre:</b>". $nombre ."</br>";
        echo "<b>Apellido:</b>". $apellido ."</br>";
        echo "<b>Edad:</b>". $edad ."</br>";
        echo "<b>Población:</b>". $poblacion ."</br>";
    ?>
</body>
</html>