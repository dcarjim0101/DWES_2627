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
                <legend>Formulario Edición Alumno</legend>

                <form action="update.php?id=<?= $alumno->id ?>" method="post">
                    <!-- nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= htmlspecialchars($alumno->nombre) ?>" required>
                    </div>
                    <!-- apellidos -->
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= htmlspecialchars($alumno->apellidos) ?>" required>
                    </div>
                    <!-- email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($alumno->email) ?>" required>
                    </div>
                    <!-- fecha de nacimiento -->
                    <div class="mb-3">
                        <label for="f_nacimiento" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" value="<?= htmlspecialchars($alumno->f_nacimiento) ?>" required>
                    </div>
                    <!-- curso -->
                    <!-- Genera dinámicamente la lista desplegable a partir del array $cursos -->
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso:</label>
                        <select class="form-select" id="curso" name="curso" required>
                            <?php foreach ($cursos as $indice => $curso) : ?>
                                <option value="<?= $indice ?>" <?= ($alumno->curso === $indice) ? 'selected' : null ?>><?= htmlspecialchars($curso) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- asignaturas -->
                    <!-- Genera dinámicamente una lista checkbox a partir del array $asignaturas -->
                    <div class="mb-3">
                        <label class="form-label">Asignaturas:</label>
                        <?php foreach ($asignaturas as $indice => $asignatura) : ?>
                            <div class="form-check">
                                <div class="form-field">
                                    <input type="checkbox" id="asignatura_<?= $indice ?>" class="check theme-secondary" name="asignaturas[]" value="<?= $indice ?>" <?= in_array($indice, $alumno->asignaturas) ? 'checked' : null ?> />
                                    <label for="asignatura_<?= $indice ?>"><?= htmlspecialchars($asignatura) ?></label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <br>
                    <div class="btn-group" role="group" aria-label="Acciones del formulario">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Restablecer</button>
                        <button type="submit" class="btn-solid theme-primary">Actualizar Alumno</button>
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
