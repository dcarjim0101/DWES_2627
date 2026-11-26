<?php

// Clase Libro con propiedades públicas
class Libro
{
    public ?int $id;
    public ?string $titulo;
    public ?string $fecha_publicacion;
    public ?string $autor;
    public ?int $categoria;
    public ?array $etiquetas;
    public ?int $numero_paginas;
    public ?int $stock;
    public ?float $precio;

    public function __construct(
        ?int $id = null,
        ?string $titulo = null,
        ?string $fecha_publicacion = null,
        ?string $autor = null,
        ?int $categoria = null,
        ?array $etiquetas = [],
        ?int $numero_paginas = null,
        ?int $stock = null,
        ?float $precio = null
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->etiquetas = $etiquetas;
        $this->numero_paginas = $numero_paginas;
        $this->stock = $stock;
        $this->precio = $precio;
    }
}
