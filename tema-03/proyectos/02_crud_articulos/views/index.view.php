<?php
// Valores por defecto (los define order.php / filter.php cuando se usan)
$termino = $termino ?? '';
$campo = $campo ?? '';
$sentido = $sentido ?? '';

// Enlace de ordenación para una columna (alterna asc/desc)
$enlace_orden = function (string $columna) use ($campo, $sentido): string {
    $nuevo = ($campo === $columna && $sentido === 'asc') ? 'desc' : 'asc';
    return 'order.php?campo=' . $columna . '&amp;sentido=' . $nuevo;
};

// Icono que indica la columna y el sentido de ordenación actual
$icono_orden = function (string $columna) use ($campo, $sentido): string {
    if ($campo !== $columna) {
        return '';
    }
    return $sentido === 'asc'
        ? ' <i class="bi bi-caret-up-fill"></i>'
        : ' <i class="bi bi-caret-down-fill"></i>';
};
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2 - CRUD Artículos</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.2 - CRUD Artículos</span>
        </header>

        <!-- Menú principal de la aplicación -->
        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Artículos</a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                    </div>
                    <div class="drawer-body mb-2 md:mb-0">
                        <ul class="nav navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="new.php">Nuevo</a>
                            </li>
                        </ul>
                        <!-- formulario de búsqueda -->
                        <form class="hstack gap-2" role="search" action="filter.php" method="get">
                            <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar" name="prompt" value="<?= htmlspecialchars($termino) ?>" />
                            <button class="btn-solid btn-icon theme-secondary" type="submit" aria-label="Buscar">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                </dialog>
            </div>
        </nav>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Tabla de artículos</legend>

                <!-- término de búsqueda aplicado -->
                <?php if ($termino !== ''): ?>
                    <p>
                        Resultados para: <strong><?= htmlspecialchars($termino) ?></strong>
                        <a href="index.php" class="btn btn-outline-primary btn-sm ms-2">Limpiar filtro</a>
                    </p>
                <?php endif; ?>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><a href="<?= $enlace_orden('id') ?>" class="text-decoration-none">Id<?= $icono_orden('id') ?></a></th>
                            <th scope="col"><a href="<?= $enlace_orden('descripcion') ?>" class="text-decoration-none">Descripción<?= $icono_orden('descripcion') ?></a></th>
                            <th scope="col"><a href="<?= $enlace_orden('modelo') ?>" class="text-decoration-none">Modelo<?= $icono_orden('modelo') ?></a></th>
                            <th scope="col"><a href="<?= $enlace_orden('categorias') ?>" class="text-decoration-none">Categorías<?= $icono_orden('categorias') ?></a></th>
                            <th scope="col" class="text-end"><a href="<?= $enlace_orden('unidades') ?>" class="text-decoration-none">Unidades<?= $icono_orden('unidades') ?></a></th>
                            <th scope="col" class="text-end"><a href="<?= $enlace_orden('precio') ?>" class="text-decoration-none">Precio<?= $icono_orden('precio') ?></a></th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $indice => $articulo): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $articulo['id'] ?></th>
                                <td><?= $articulo['descripcion'] ?></td>
                                <td><?= $articulo['modelo'] ?></td>
                                <td><?= implode(', ', $articulo['categorias']) ?></td>
                                <td class="text-end"><?= $articulo['unidades'] ?></td>
                                <td class="text-end"><?= number_format($articulo['precio'], 2, ',', '.') ?> €</td>
                                <!-- botones de acción -->
                                <td>
                                    <!-- editar -->
                                    <a href="edit.php?indice=<?= $indice ?>" class="btn theme-info btn-outline-primary btn-sm" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <!-- eliminar (formulario POST) -->
                                    <form action="delete.php" method="post" class="d-inline" onsubmit="return confirm('¿Seguro que quieres eliminar este artículo?');">
                                        <input type="hidden" name="indice" value="<?= $indice ?>">
                                        <button type="submit" class="btn btn-outline-primary btn-sm theme-warning" title="Eliminar">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>

                                    <!-- mostrar -->
                                    <a href="show.php?indice=<?= $indice ?>" class="btn btn-outline-primary btn-sm theme-danger" title="Mostrar">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php if (empty($articulos)): ?>
                            <tr>
                                <td colspan="7" class="text-center">No se han encontrado artículos.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="text-end">Total</td>
                            <td class="text-end"><?= count($articulos) ?></td>
                        </tr>
                    </tfoot>
                </table>

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

        <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>
