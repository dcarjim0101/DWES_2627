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
                <form method="post">
                    <div class="mb-3">
                        <label for="velocidad_inicial" class="form-label">Velocidad inicial (m/s): </label>
                        <input type="number" class="form-control" id="velocidad_inicial" name="velocidad_inicial" required>
                        <small></small>
                    </div>
                    <div class="mb-3">
                        <label for="Aceleracion" class="form-label">Aceleracion (m/s2): </label>
                        <input type="number" class="form-control" id="aceleracion" name="aceleracion" required>
                        <small></small>
                    </div>
                    <div class="mb-3">
                        <label for="tiempo_transcurrido" class="form-label">Tiempo transcurrido (s): </label>
                        <input type="number" class="form-control" id="tiempo_transcurrido" name="tiempo_transcurrido" required>
                        <small></small>
                    </div>
                    <div class="mb-3">
                        <label for="masa" class="form-label">Masa (kg): </label>
                        <input type="number" class="form-control" id="masa" name="masa" required>
                        <small></small>
                    </div>

                    <!-- botones -->
                    <div class="btn-group" role="group">
                        <button type="reset" class="btn btn-danger">Borrar</button>
                        <button type="submit" class="btn btn-warning" name="operacion" value="calcular" formaction="calcular.php">calcular</button>
                    </div>
                </form>
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