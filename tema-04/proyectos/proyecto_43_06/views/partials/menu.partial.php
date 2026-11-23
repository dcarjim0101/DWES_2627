<!-- Menú principal de la aplicación -->
<nav class="navbar md:navbar-expand bg-1">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Alumnos</a>
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
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="new.php">Nuevo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ordenar.php">Ordenar</a>
                    </li>
                </ul>
                <!-- buscar -->
                <form class="d-flex" role="search" action="buscar.php" method="get">
                    <input class="form-control me-2" type="search" name="q" placeholder="Buscar alumno ..." aria-label="Buscar" value="<?= htmlspecialchars($q ?? '') ?>">
                    <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </dialog>
    </div>
</nav>
