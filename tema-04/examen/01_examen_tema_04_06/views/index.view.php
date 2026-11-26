<?php require_once __DIR__ . '/../libs/functions.php'; ?>
<!doctype html>
<html lang="es">

<head>
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Examen 4.1 - CRUD Libros - POO Sin Encapsulamiento</title>
</head>

<body>
    <div class="container mt-3">

        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <?php require_once __DIR__ . '/partials/menu.partial.php'; ?>

        <main>
            <div class="content">
                <legend>Tabla de libros - POO</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Publicación</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Etiquetas</th>
                            <th scope="col" class="text-end">Páginas</th>
                            <th scope="col" class="text-end">Stock</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($libros as $libro): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $libro->id ?></th>
                                <td><?= htmlspecialchars($libro->titulo) ?></td>
                                <td><?= formatear_fecha($libro->fecha_publicacion) ?></td>
                                <td><?= htmlspecialchars($libro->autor) ?></td>
                                <td><?= htmlspecialchars($categorias[$libro->categoria] ?? '') ?></td>
                                <td><?= htmlspecialchars(implode(', ', $tabla_libros->indice_etiquetas_a_nombres($libro->etiquetas))) ?></td>
                                <td class="text-end"><?= $libro->numero_paginas ?></td>
                                <td class="text-end"><?= $libro->stock ?></td>
                                <td class="text-end"><?= formatear_precio($libro->precio) ?></td>

                                <td>

                                    <a href="edit.php?id=<?= $libro->id ?>" class="btn-solid theme-primary" title="Editar">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a href="delete.php?id=<?= $libro->id ?>" class="btn-solid theme-danger" title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                    </a>

                                    <a href="?id=<?= $libro->id ?>" class="btn-solid theme-info" title="ver">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if (count($libros) === 0): ?>
                            <tr>
                                <td colspan="10" class="text-center">No hay libros que mostrar</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>

                            <td colspan="9"><?= count($libros) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>
        <?php require_once __DIR__ . '/layouts/js_bootstrap.layout.php'; ?>

    </div>
</body>

</html>
