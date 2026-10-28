<?php

    /*
    Funciones incluidas:
        - get_libros():
            Devuelve un array con todos los libros del archivo JSON.
    */


// Funcion get_libros(): Devuelve un array con todos los libros del archivo JSON.
function get_articulos() {

    $articulos = [
        [
            "id" => 1,
            "nombre" => "Portátil HP",
            "descripcion" => "Ordenador portátil para trabajo y estudios",
            "categoria" => "Informática",
            "stock" => 10,
            "precio" => 599.99
        ],
        [
            "id" => 2,
            "nombre" => "Ratón inalámbrico",
            "descripcion" => "Ratón inalámbrico con conexión USB",
            "categoria" => "Accesorios",
            "stock" => 25,
            "precio" => 19.99
        ],
        [
            "id" => 3,
            "nombre" => "Teclado mecánico",
            "descripcion" => "Teclado mecánico para ordenador",
            "categoria" => "Accesorios",
            "stock" => 15,
            "precio" => 49.99
        ],
        [
            "id" => 4,
            "nombre" => "Monitor Samsung",
            "descripcion" => "Monitor de 24 pulgadas Full HD",
            "categoria" => "Informática",
            "stock" => 8,
            "precio" => 149.99
        ],
        [
            "id" => 5,
            "nombre" => "Auriculares Bluetooth",
            "descripcion" => "Auriculares inalámbricos con micrófono",
            "categoria" => "Audio",
            "stock" => 20,
            "precio" => 34.99
        ]
    ];

    return $articulos;
}
?>