<!doctype html>
<html lang="es">

<head>
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Examen 4.1 - CRUD Libros - POO Sin Encapsulamiento</title>
</head>

<body>
    <div class="container mt-3">

        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <main>
            <div class="content">
                <legend>Formulario Nuevo Libro</legend>

                <form action="create.php" method="post">

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_publicacion" class="form-label">Fecha de publicación:</label>
                        <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" required>
                    </div>

                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor" required>
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría:</label>
                        <select class="form-select" id="categoria" name="categoria" required>
                            <option value="" disabled selected>Seleccione Categoría ...</option>
                            <?php foreach ($categorias as $indice => $categoria) : ?>
                                <option value="<?= $indice ?>"><?= htmlspecialchars($categoria) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Etiquetas:</label>
                        <?php foreach ($etiquetas as $indice => $etiqueta) : ?>
                            <div class="form-check">
                                <div class="form-field">
                                    <input type="checkbox" id="etiqueta_<?= $indice ?>" class="check theme-secondary" name="etiquetas[]" value="<?= $indice ?>" />
                                    <label for="etiqueta_<?= $indice ?>"><?= htmlspecialchars($etiqueta) ?></label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mb-3">
                        <label for="numero_paginas" class="form-label">Número de páginas:</label>
                        <input type="number" min="1" step="1" class="form-control" id="numero_paginas" name="numero_paginas" required>
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock:</label>
                        <input type="number" min="0" step="1" class="form-control" id="stock" name="stock" required>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" min="0" step="0.01" class="form-control" id="precio" name="precio" required>
                    </div>
                    <br>
                    <div class="btn-group" role="group">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Guardar Libro</button>
                    </div>
                </form>
            </div>
        </main>

        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>
    </div>
</body>

</html>
