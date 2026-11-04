<?php

require 'libs/functions.php';

$peliculas = get_peliculas();

$generos = array_map('trim', explode(',', $_POST['generos']));

$nueva = [
    'id' => obtener_id_nueva_pelicula($peliculas),
    'titulo' => $_POST['titulo'],
    'idioma' => $_POST['idioma'],
    'director' => $_POST['director'],
    'generos' => $generos,
    'año' => $_POST['año'],
    'duracion' => $_POST['duracion'],
    'recaudacion' => $_POST['recaudacion']
];

$peliculas[] = $nueva;

$total = array_sum(array_column($peliculas, 'recaudacion'));

require 'views/index.view.php';
