<?php

class Articulo
{
    private int $id;
    private string $descripcion;
    private string $modelo;
    private int $marca;
    private array $categorias;
    private int $unidades;
    private float $precio;

    public function __construct(
        int $id,
        string $descripcion,
        string $modelo,
        int $marca,
        array $categorias,
        int $unidades,
        float $precio
    ) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->categorias = $categorias;
        $this->unidades = $unidades;
        $this->precio = $precio;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getMarca(): int
    {
        return $this->marca;
    }

    public function setMarca(int $marca): void
    {
        $this->marca = $marca;
    }

    public function getCategorias(): array
    {
        return $this->categorias;
    }

    public function setCategorias(array $categorias): void
    {
        $this->categorias = $categorias;
    }

    public function getUnidades(): int
    {
        return $this->unidades;
    }

    public function setUnidades(int $unidades): void
    {
        $this->unidades = $unidades;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): void
    {
        $this->precio = $precio;
    }
}