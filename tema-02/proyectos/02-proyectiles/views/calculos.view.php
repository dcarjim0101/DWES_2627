<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado - Calculadora Lanzamiento de Proyectiles</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-rocket-takeoff"></i>
            <span class="fs-6">Proyecto 2.2 - Lanzamiento de Proyectiles - Resultado</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <table class="table">
                <tr>
                    <th colspan="2">Valores Iniciales:</th>
                </tr>
                <tr>
                    <td>Velocidad Inicial:</td>
                    <td><?= number_format($v0, 2, ',', '.') ?> m/s</td>
                </tr>
                <tr>
                    <td>Ángulo Inclinación:</td>
                    <td><?= number_format($a0, 2, ',', '.') ?> º</td>
                </tr>
                <tr>
                    <th colspan="2">Resultados:</th>
                </tr>
                <tr>
                    <td>Ángulo Radianes:</td>
                    <td><?= number_format($anguloRadianes, 5, ',', '.') ?> Radianes</td>
                </tr>
                <tr>
                    <td>Velocidad Inicial X:</td>
                    <td><?= number_format($v0x, 2, ',', '.') ?> m/s</td>
                </tr>
                <tr>
                    <td>Velocidad Inicial Y:</td>
                    <td><?= number_format($v0y, 2, ',', '.') ?> m/s</td>
                </tr>
                <tr>
                    <td>Alcance Máximo del Proyectil:</td>
                    <td><?= number_format($xMax, 2, ',', '.') ?> m</td>
                </tr>
                <tr>
                    <td>Tiempo de Vuelo del Proyectil:</td>
                    <td><?= number_format($tiempoVuelo, 2, ',', '.') ?> s</td>
                </tr>
                <tr>
                    <td>Altura Máxima del Proyectil:</td>
                    <td><?= number_format($yMax, 2, ',', '.') ?> m</td>
                </tr>
            </table>

            <a href="index.php" class="btn btn-primary">Volver</a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
  </body>
</html>