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
                <legend>Formulario Nuevo Alumno</legend>

                <form action="create.php" method="post">
                    <!-- nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <!-- apellidos -->
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                    <!-- email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <!-- fecha de nacimiento -->
                    <div class="mb-3">
                        <label for="f_nacimiento" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" required>
                    </div>
                    <!-- curso -->
                    <!-- Genera dinámicamente la lista desplegable a partir del array $cursos (se guarda el índice) -->
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso:</label>
                        <select class="form-select" id="curso" name="curso" required>
                            <option value="" disabled selected>Seleccione curso ...</option>
                            <?php foreach ($cursos as $indice => $curso) : ?>
                                <option value="<?= $indice ?>"><?= htmlspecialchars($curso) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- asignaturas -->
                    <!-- Genera dinámicamente una lista checkbox a partir del array $asignaturas (se guardan los índices) -->
                    <div class="mb-3">
                        <label class="form-label">Asignaturas:</label>
                        <?php foreach ($asignaturas as $indice => $asignatura) : ?>
                            <div class="form-check">
                                <div class="form-field">
                                    <input type="checkbox" id="asignatura_<?= $indice ?>" class="check theme-secondary" name="asignaturas[]" value="<?= $indice ?>" />
                                    <label for="asignatura_<?= $indice ?>"><?= htmlspecialchars($asignatura) ?></label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <br>
                    <div class="btn-group" role="group" aria-label="Acciones del formulario">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Crear Alumno</button>
                    </div>

                </form>
            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap básico 6.0 -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>
