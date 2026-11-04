<?php

function get_peliculas()
{
   $peliculas = [
    
    [
        "id" => 1,
        "titulo" => "El último horizonte",
        "idioma" => "Español",
        "director" => "Carlos Méndez",
        "generos" => ["Ciencia ficción", "Drama"],
        "año" => 2021,
        "duracion" => 124,
        "recaudacion" => 85.5
    ],
    [
        "id" => 2,
        "titulo" => "Sombras del pasado",
        "idioma" => "Inglés",
        "director" => "James Wilson",
        "generos" => ["Thriller", "Misterio"],
        "año" => 2019,
        "duracion" => 110,
        "recaudacion" => 62.3
    ],
    [
        "id" => 3,
        "titulo" => "Reino de cenizas",
        "idioma" => "Inglés",
        "director" => "Michael Carter",
        "generos" => ["Fantasía", "Aventura"],
        "año" => 2023,
        "duracion" => 145,
        "recaudacion" => 210.8
    ],
    [
        "id" => 4,
        "titulo" => "Bajo la superficie",
        "idioma" => "Español",
        "director" => "Laura Sánchez",
        "generos" => ["Terror", "Suspense"],
        "año" => 2020,
        "duracion" => 98,
        "recaudacion" => 45.2
    ],
    [
        "id" => 5,
        "titulo" => "Código Omega",
        "idioma" => "Japonés",
        "director" => "Hiroshi Tanaka",
        "generos" => ["Acción", "Ciencia ficción"],
        "año" => 2022,
        "duracion" => 132,
        "recaudacion" => 178.6
    ],
    [
        "id" => 6,
        "titulo" => "Un verano eterno",
        "idioma" => "Francés",
        "director" => "Pierre Dubois",
        "generos" => ["Romance", "Comedia"],
        "año" => 2018,
        "duracion" => 105,
        "recaudacion" => 38.7
    ]
];

    return $peliculas;
}

function obtener_id_nueva_pelicula($peliculas = [])
{
    $mayor = 0;
    foreach ($peliculas as $pelicula) {
        if ($pelicula['id'] > $mayor) {
            $mayor = $pelicula['id'];
        }
    }
    return $mayor + 1;
}
