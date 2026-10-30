<?php

    /*
    Funciones incluidas:
        - get_articulos():
            Devuelve un array con todos los articulos del archivo JSON.
    */


// Funcion get_articulos(): Devuelve un array con todos los articulos del archivo JSON.
function get_articulos() {

    $articulos = [
        [
            "id" => 1,
            "descripcion" => "Ordenador portátil para trabajo y estudios",
            "modelo" => "Ratón inalámbrico",
            "categorias" => "Informática",
            "unidades" => 10,
            "precio" => 599.99
        ],
        [
            "id" => 2,
            "descripcion" => "Ratón inalámbrico con conexión USB",
            "modelo" => "Ratón inalámbrico",
            "categorias" => "Accesorios",
            "unidades" => 25,
            "precio" => 19.99
        ],
        [
            "id" => 3,
            "descripcion" => "Teclado mecánico para ordenador",
            "modelo" => "Ratón inalámbrico",
            "categorias" => "Accesorios",
            "unidades" => 15,
            "precio" => 49.99
        ],
        [
            "id" => 4,
            "descripcion" => "Monitor de 24 pulgadas Full HD",
            "modelo" => "Ratón inalámbrico",
            "categorias" => "Informática",
            "unidades" => 8,
            "precio" => 149.99
        ],
        [
            "id" => 5,
            "descripcion" => "Auriculares inalámbricos con micrófono",
            "modelo" => "Ratón inalámbrico",
            "categorias" => "Audio",
            "unidades" => 20,
            "precio" => 34.99
        ]
    ];

    return $articulos;
}

function obtener_id_nuevo_articulo($articulos = []) {
    // Obtener el último articulo del array
    $ultimo_articulo = end($articulos);

    // Obtener el id del último articulo
    $ultimo_id = $ultimo_articulo['id'];

    // Devolver el id del nuevo articulo (último id + 1)
    return $ultimo_id + 1;
}

?>