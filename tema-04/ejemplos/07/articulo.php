<?php

/*
    clase articulo
*/

class articulo{
    private int $id;
    private string $descripcion;
    private array $categorias;
    private int $unidades;
    private float $precio;
}

public function __construct(
    ?int $id = null,
    ?string $descripcion = null,
    ?array $categorias = [],
    ?int $unidades = null,
    ?float $precio = null
){
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->categorias = $categorias;
    $this->unidades = $unidades;
    $this->precio = $precio;
}