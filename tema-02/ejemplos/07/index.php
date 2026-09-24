<?php
    /*
        Ejemplo 07:
        
    */
    $nombre = "Juan";
    $apellidos = "Pérez López";
    $edad = 30;
    $poblacion = "Madrid";
    $casado = true;
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
        // comillas dobles
        echo "<b>Nombre:</b> $nombre</br>";

        // comillas simples
        echo '<b>Nombre:</b> $nombre</br>';

        // solucion uso comillas simples y concatenación
        echo '<b>Nombre:</b> ' . $nombre . '</br>';
    ?>
    
</body>
</html>