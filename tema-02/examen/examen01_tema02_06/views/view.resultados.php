<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>examen practico</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-speedometer2"></i>
            <span class="fs-6">Examen practico 03 - movimiento rectilineo uniformemente acelerado</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <table>
                    <tr>
                        <th colspan="3">Datos Introducidos</th>
                    </tr>

                    <tr>
                        <td>Velocidad Inicial:</td>
                        <td><?= $v0; ?></td>
                        <td>m/s</td>
                    </tr>
                    <tr>
                        <td>Aceleracion:</td>
                        <td><?= $a; ?></td>
                        <td>m/s2</td>
                    </tr>
                    <tr>
                        <td>Tiempo transcurrido:</td>
                        <td><?= $t; ?></td>
                        <td>s</td>
                    </tr>
                    <tr>
                        <td>Masa:</td>
                        <td><?= $m; ?></td>
                        <td>kg</td>
                    </tr>



                    <tr>
                        <th colspan="3">Resultados</th>
                    </tr>

                    <tr>
                        <td>Velocidad final:</td>
                        <td><?= $v; ?></td>
                        <td>m/s</td>
                    </tr>
                    <tr>
                        <td>Espacio recorrido:</td>
                        <td><?= $e; ?></td>
                        <td>m</td>
                    </tr>
                    <tr>
                        <td>Fuerza neta:</td>
                        <td><?= $f; ?></td>
                        <td>N</td>
                    </tr>
                    <tr>
                        <td>Energia cinetica final:</td>
                        <td><?= $ec; ?></td>
                        <td>J</td>
                    </tr>
                </table>

                <!-- boton de volver -->
                <a href="index.php" class="btn btn-primary">Volver</a>
            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    David Carrero Jiménez - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>

    </div>
</body>

</html>