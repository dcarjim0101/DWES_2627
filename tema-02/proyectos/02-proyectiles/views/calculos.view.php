<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.2 - Calculadora Lanzamiento de Proyectiles</title>
</head>
<body>
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-rocket-takeoff"></i>
            <span class="fs-6">Proyecto 2.2 - Lanzamiento de Proyectiles</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <legend>Resultado</legend>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>valores iniciales</th>
                        <td></td>
                    </tr>
                    <tr>
                        <td>velocidad inicial:</td>
                        <td><?=  $velocidad_inicial ?> m/s </td>
                    </tr>
                    <tr>
                        <td>ángulo inclinacion:</td>
                        <td><?=  $angulo_lanzamiento ?> °</td>
                    </tr>
                    <tr>
                        <th>resultados:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <td>angulo radianes:</td>
                        <td><?=  $angulo_radianes ?> radianes</td>
                    </tr>
                </tbody>
            </table>
        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    David Carrero Jiménez - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>
</body>