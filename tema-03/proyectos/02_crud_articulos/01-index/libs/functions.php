<?php

/*
    Funciones incluidas:
        - get_articulos():
            Devuelve un array con todos los articulos del archivo JSON.
    */


// Funcion get_articulos(): Devuelve un array con todos los libros del archivo JSON.
function get_articulos() {

    $articulos = [
        [
            "id" => 1,
            "nombre" => "Portátil HP",
            "descripcion" => "Ordenador portátil de 15 pulgadas",
            "categoria" => "Informática",
            "marcas" => ["HP", "Intel"],
            "stock" => 10,
            "precio" => 599.99
        ],
        [
            "id" => 2,
            "nombre" => "Ratón inalámbrico",
            "descripcion" => "Ratón óptico inalámbrico con conexión USB",
            "categoria" => "Periféricos",
            "marcas" => ["Logitech"],
            "stock" => 25,
            "precio" => 19.99
        ],
        [
            "id" => 3,
            "nombre" => "Teclado mecánico",
            "descripcion" => "Teclado mecánico con iluminación RGB",
            "categoria" => "Periféricos",
            "marcas" => ["Corsair", "Razer"],
            "stock" => 15,
            "precio" => 79.99
        ],
        [
            "id" => 4,
            "nombre" => "Monitor Samsung",
            "descripcion" => "Monitor de 27 pulgadas con resolución Full HD",
            "categoria" => "Pantallas",
            "marcas" => ["Samsung"],
            "stock" => 8,
            "precio" => 189.99
        ],
        [
            "id" => 5,
            "nombre" => "Auriculares Bluetooth",
            "descripcion" => "Auriculares inalámbricos con cancelación de ruido",
            "categoria" => "Audio",
            "marcas" => ["Sony", "JBL"],
            "stock" => 20,
            "precio" => 49.99
        ]
    ];

    return $articulos;
}

$articulos = get_articulos();
?>