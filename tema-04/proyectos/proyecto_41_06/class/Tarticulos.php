<?php

class Tarticulos
{
    private array $tarticulos;

    public function __construct()
    {
        $this->tarticulos = [];
    }

    public function getTarticulos(): array
    {
        return $this->tarticulos;
    }

    public function setTarticulos(array $tarticulos): void
    {
        $this->tarticulos = $tarticulos;
    }

    public static function getMarcas(): array
    {
        return [
            'Samsung',
            'Apple',
            'Sony',
            'Logitech',
            'Xiaomi',
            'Lenovo'
        ];
    }

    public static function getCategorias(): array
    {
        return [
            'Electrónica',
            'Informática',
            'Hogar',
            'Gaming',
            'Accesorios',
            'Audio'
        ];
    }

    public static function indice_categorias_a_nombre_categorias(array $indices): array
    {
        $categorias = self::getCategorias();
        $nombres = [];

        foreach ($indices as $indice) {
            if (isset($categorias[$indice])) {
                $nombres[] = $categorias[$indice];
            }
        }

        return $nombres;
    }

    public function addArticulo(Articulo $articulo): void
    {
        $this->tarticulos[] = $articulo;
    }

    public function getNuevoId(): int
    {
        $max = 0;

        foreach ($this->tarticulos as $articulo) {
            if ($articulo->getId() > $max) {
                $max = $articulo->getId();
            }
        }

        return $max + 1;
    }

    public function addArticulos(): void
    {
        $datos = [
            [1, 'Smartphone 6.5 pulgadas', 'Galaxy S24', 0, [0, 4], 25, 899.99],
            [2, 'Portátil ultraligero 14"', 'MacBook Air M3', 1, [0, 1], 10, 1299.00],
            [3, 'Auriculares inalámbricos', 'WH-1000XM5', 2, [0, 5, 4], 40, 349.50],
            [4, 'Ratón gaming ergonómico', 'G502 X', 3, [1, 3, 4], 60, 79.90],
            [5, 'Robot aspirador', 'Roborock S8', 4, [2, 0], 15, 549.00],
            [6, 'Portátil gaming 15"', 'Legion 5 Pro', 5, [1, 3], 8, 1499.99],
        ];

        foreach ($datos as $d) {
            $this->addArticulo(new Articulo($d[0], $d[1], $d[2], $d[3], $d[4], $d[5], $d[6]));
        }
    }
}