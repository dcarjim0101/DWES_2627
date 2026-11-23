<!doctype html>
<html lang="es">

<head>
    <!-- Cargar la cabecera de la aplicación -->
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- Menú principal de la aplicación -->
        <?php require_once __DIR__ . '/partials/menu.partial.php'; ?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend><?= htmlspecialchars($titulo ?? 'Tabla de alumnos - POO') ?></legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end"><a href="ordenar.php?campo=id" class="text-decoration-none">Id</a></th>
                            <th scope="col"><a href="ordenar.php?campo=apellidos" class="text-decoration-none">Alumno</a></th>
                            <th scope="col"><a href="ordenar.php?campo=email" class="text-decoration-none">Email</a></th>
                            <th scope="col"><a href="ordenar.php?campo=f_nacimiento" class="text-decoration-none">Fecha nacimiento</a></th>
                            <th scope="col" class="text-end">Edad</th>
                            <th scope="col"><a href="ordenar.php?campo=curso" class="text-decoration-none">Curso</a></th>
                            <th scope="col">Asignaturas</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $alumno): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $alumno->id ?></th>
                                <td><?= htmlspecialchars($alumno->apellidos . ', ' . $alumno->nombre) ?></td>
                                <td><?= htmlspecialchars($alumno->email) ?></td>
                                <td><?= date('d/m/Y', strtotime($alumno->f_nacimiento)) ?></td>
                                <td class="text-end"><?= $alumno->getEdad() ?></td>
                                <td><?= htmlspecialchars($cursos[$alumno->curso] ?? '') ?></td>
                                <td><?= htmlspecialchars(implode(', ', $tabla_alumnos->get_indice_asignaturas_a_nombres($alumno->asignaturas))) ?></td>
                                <!-- botones de acción -->
                                <td>
                                    <!--  editar -->
                                    <a href="edit.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-primary" title="Editar">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!--  borrar -->
                                    <a href="delete.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-danger" title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <!--  mostrar -->
                                    <a href="show.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-info" title="Mostrar">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if (count($alumnos) === 0): ?>
                            <tr>
                                <td colspan="8" class="text-center">No hay alumnos que mostrar</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <td colspan="7"><?= count($alumnos) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap básico 6.0 -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>
