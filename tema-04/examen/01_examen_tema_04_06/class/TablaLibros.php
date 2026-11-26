<?php

// Clase TablaLibros: array de objetos Libro
class TablaLibros
{
    public ?array $tlibros;

    public function __construct()
    {
        $this->tlibros = [];
    }

    // Categorías predefinidas
    public static function getCategorias(): array
    {
        return ['Novela', 'Ciencia ficción', 'Fantasía', 'Historia', 'Informática', 'Ensayo'];
    }

    // Etiquetas predefinidas
    public static function getEtiquetas(): array
    {
        return ['Bestseller', 'Clásico', 'Novedad', 'Oferta', 'Saga', 'Juvenil'];
    }

    // Libros de ejemplo
    public function addLibros(): void
    {
        $this->tlibros[] = new Libro(1, 'pelicula uno', '1967-05-30', 'director uno', 0, [0, 1], 471, 12, 19.95);
        $this->tlibros[] = new Libro(2, 'pelicula dos', '1965-08-01', 'director dos', 1, [0, 1, 4], 612, 8, 24.50);
        $this->tlibros[] = new Libro(3, 'pelicula trres', '1937-09-21', 'director tres', 2, [1, 5], 310, 15, 16.90);
        $this->tlibros[] = new Libro(4, 'pelicula cuatro', '2011-01-01', 'director cuatro', 3, [0, 3], 498, 5, 22.00);
        $this->tlibros[] = new Libro(5, 'pelicula chinco', '2008-08-01', 'director cincoo', 4, [2, 3], 464, 10, 35.00);
    }

    public function getNuevoId(): int
    {
        $max = 0;
        foreach ($this->tlibros as $libro) {
            if ($libro->id > $max) {
                $max = $libro->id;
            }
        }
        return $max + 1;
    }

    public function create(Libro $libro): void
    {
        $this->tlibros[] = $libro;
    }

    public function read(int $indice): ?Libro
    {
        return $this->tlibros[$indice] ?? null;
    }

    public function update(Libro $libro, int $indice): void
    {
        $this->tlibros[$indice] = $libro;
    }

    public function delete(int $indice): void
    {
        unset($this->tlibros[$indice]);
        $this->tlibros = array_values($this->tlibros);
    }

    public function getIndiceById(int $id): ?int
    {
        foreach ($this->tlibros as $indice => $libro) {
            if ($libro->id === $id) {
                return $indice;
            }
        }
        return null;
    }

    public function indice_etiquetas_a_nombres(array $indices): array
    {
        $etiquetas = self::getEtiquetas();
        $nombres = [];

        foreach ($indices as $indice) {
            if (isset($etiquetas[$indice])) {
                $nombres[] = $etiquetas[$indice];
            }
        }

        return $nombres;
    }
}
