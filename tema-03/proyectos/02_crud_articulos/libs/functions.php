<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de artículos.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los artículos.
        - obtener_id_nuevo_articulo($articulos): Devuelve el id del nuevo artículo.
        - categorias_a_array($texto): Convierte "a, b" en ['a', 'b'].
*/

// Función get_articulos(): Devuelve un array con todos los artículos.
function get_articulos() {
    // Array de artículos (simulando una base de datos)
    $articulos = [
        [
            'id' => 1,
            'descripcion' => 'Ordenador portátil para trabajo y estudios',
            'modelo' => 'HP 15s',
            'categorias' => ['informática', 'portátiles'],
            'unidades' => 10,
            'precio' => 599.99
        ],
        [
            'id' => 2,
            'descripcion' => 'Ratón inalámbrico con conexión USB',
            'modelo' => 'Logitech M185',
            'categorias' => ['periféricos', 'accesorios'],
            'unidades' => 25,
            'precio' => 19.99
        ],
        [
            'id' => 3,
            'descripcion' => 'Teclado mecánico para ordenador',
            'modelo' => 'Corsair K70',
            'categorias' => ['periféricos', 'gaming'],
            'unidades' => 15,
            'precio' => 49.99
        ],
        [
            'id' => 4,
            'descripcion' => 'Monitor de 24 pulgadas Full HD',
            'modelo' => 'Samsung S24',
            'categorias' => ['informática', 'pantallas'],
            'unidades' => 8,
            'precio' => 149.99
        ],
        [
            'id' => 5,
            'descripcion' => 'Auriculares inalámbricos con micrófono',
            'modelo' => 'Sony WH-CH520',
            'categorias' => ['audio', 'telefonía'],
            'unidades' => 20,
            'precio' => 34.99
        ]
    ];

    return $articulos;
}

// Función obtener_id_nuevo_articulo($articulos): Devuelve el id del nuevo artículo.
function obtener_id_nuevo_articulo($articulos = []) {
    // Si no hay artículos, el primer id es 1
    if (empty($articulos)) {
        return 1;
    }

    // Obtener el último artículo del array
    $ultimo_articulo = end($articulos);

    // Devolver el id del nuevo artículo (último id + 1)
    return $ultimo_articulo['id'] + 1;
}

// Función categorias_a_array($texto): Convierte un texto separado por comas en un array.
function categorias_a_array($texto) {
    $categorias = array_map('trim', explode(',', $texto));

    // Quitar elementos vacíos y reindexar
    return array_values(array_filter($categorias, fn($c) => $c !== ''));
}
?>