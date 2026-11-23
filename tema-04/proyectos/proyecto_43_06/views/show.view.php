<!doctype html>
<html lang="es">

<head>
    <!-- Cargar HEAD, meta etiquetas y diseño de la aplicación -->
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera HEADER de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Detalle del Alumno</legend>

                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 25%;">Id</th>
                            <td><?= $alumno->id ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td><?= htmlspecialchars($alumno->nombre) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Apellidos</th>
                            <td><?= htmlspecialchars($alumno->apellidos) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?= htmlspecialchars($alumno->email) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha de nacimiento</th>
                            <td><?= date('d/m/Y', strtotime($alumno->f_nacimiento)) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Edad</th>
                            <td><?= $alumno->getEdad() ?> años</td>
                        </tr>
                        <tr>
                            <th scope="row">Curso</th>
                            <td><?= htmlspecialchars($cursos[$alumno->curso] ?? '') ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Asignaturas</th>
                            <td><?= htmlspecialchars(implode(', ', $tabla_alumnos->get_indice_asignaturas_a_nombres($alumno->asignaturas))) ?></td>
                        </tr>
                    </tbody>
                </table>

                <div class="btn-group" role="group" aria-label="Acciones">
                    <a class="btn-solid theme-primary" href="index.php" role="button">Volver</a>
                    <a class="btn-solid theme-warning" href="edit.php?id=<?= $alumno->id ?>" role="button">Editar</a>
                </div>
            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap básico 6.0 -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>
