<?php

/*
    Archivo: TablaAlumnos.php
    Descripción: Clase TablaAlumnos, se trata de un array de objetos de la clase Alumno.
    Características: POO SIN encapsulamiento.
    Atributos:
        - talumnos []
    Métodos:
        - constructor
        - create(), read(), update(), delete()
        - addAlumnos()
        - getAsignaturas(), getCursos()
        - getAlumnoById(), getIndiceById(), getNuevoId()
        - get_indice_asignaturas_a_nombres()
        - ordenar(), buscar()
*/

class TablaAlumnos
{
    public ?array $talumnos;

    /*
        constructor
        Descripción: inicializa la tabla a un array vacío.
    */
    public function __construct()
    {
        $this->talumnos = [];
    }

    /*
        Método getCursos()
        Descripción: devuelve un array con todos los cursos disponibles.
        Con este array se genera la lista desplegable del campo curso.
        Cuando trabajemos con base de datos: SELECT id, curso FROM cursos ORDER BY id.
    */
    public static function getCursos(): array
    {
        return ['1SMR', '2SMR', '1DAW', '2DAW', '1AD', '2AD'];
    }

    /*
        Método getAsignaturas()
        Descripción: devuelve un array con todas las asignaturas disponibles.
        Con este array se genera la lista de checkbox del campo asignaturas.
        Cuando trabajemos con base de datos: SELECT id, asignatura FROM asignaturas ORDER BY id.
    */
    public static function getAsignaturas(): array
    {
        return [
            'DWES',
            'DWEC',
            'Despliegue Aplicaciones',
            'HLC',
            'EINEM',
            'Diseño Interfaces',
            'Programación',
            'Bases de Datos'
        ];
    }

    /*
        Método addAlumnos()
        Descripción: añade a la tabla varios alumnos de ejemplo (simula la base de datos).
    */
    public function addAlumnos(): void
    {
        $this->talumnos[] = new Alumno(
            1,
            'Laura',
            'García Pérez',
            'laura.garcia@correo.com',
            '2004-05-14',
            3,
            [0, 1, 2, 3]
        );

        $this->talumnos[] = new Alumno(
            2,
            'Carlos',
            'López Ruiz',
            'carlos.lopez@correo.com',
            '2003-11-02',
            3,
            [0, 4, 5]
        );

        $this->talumnos[] = new Alumno(
            3,
            'Marta',
            'Sánchez Gómez',
            'marta.sanchez@correo.com',
            '2005-02-27',
            2,
            [6, 7]
        );

        $this->talumnos[] = new Alumno(
            4,
            'Pablo',
            'Fernández Díaz',
            'pablo.fernandez@correo.com',
            '2002-09-19',
            5,
            [0, 1, 2]
        );

        $this->talumnos[] = new Alumno(
            5,
            'Ana',
            'Martín Torres',
            'ana.martin@correo.com',
            '2006-01-08',
            0,
            [6]
        );
    }

    /*
        Método getNuevoId()
        Descripción: devuelve el id para un nuevo alumno (mayor id existente + 1).
    */
    public function getNuevoId(): int
    {
        $max = 0;
        foreach ($this->talumnos as $alumno) {
            if ($alumno->id > $max) {
                $max = $alumno->id;
            }
        }
        return $max + 1;
    }

    /*
        Método create()
        Descripción: añade un nuevo objeto Alumno a la tabla.
    */
    public function create(Alumno $alumno): void
    {
        $this->talumnos[] = $alumno;
    }

    /*
        Método read()
        Descripción: devuelve un objeto Alumno a partir de su índice en el array.
    */
    public function read(int $indice): ?Alumno
    {
        return $this->talumnos[$indice] ?? null;
    }

    /*
        Método update()
        Descripción: actualiza los detalles de un alumno. Parámetros: el objeto y el índice.
    */
    public function update(Alumno $alumno, int $indice): void
    {
        $this->talumnos[$indice] = $alumno;
    }

    /*
        Método delete()
        Descripción: elimina un alumno a partir de su índice y reindexa el array.
    */
    public function delete(int $indice): void
    {
        unset($this->talumnos[$indice]);
        $this->talumnos = array_values($this->talumnos);
    }

    /*
        Método getIndiceById()
        Descripción: devuelve el índice del array a partir del id del alumno.
    */
    public function getIndiceById(int $id): ?int
    {
        foreach ($this->talumnos as $indice => $alumno) {
            if ($alumno->id === $id) {
                return $indice;
            }
        }
        return null;
    }

    /*
        Método getAlumnoById()
        Descripción: devuelve un objeto Alumno a partir de su id.
    */
    public function getAlumnoById(int $id): ?Alumno
    {
        $indice = $this->getIndiceById($id);
        return $indice === null ? null : $this->read($indice);
    }

    /*
        Método get_indice_asignaturas_a_nombres()
        Descripción: devuelve un array con los nombres de las asignaturas a partir de sus índices.
    */
    public function get_indice_asignaturas_a_nombres(array $indices): array
    {
        $asignaturas = self::getAsignaturas();
        $nombres = [];

        foreach ($indices as $indice) {
            if (isset($asignaturas[$indice])) {
                $nombres[] = $asignaturas[$indice];
            }
        }

        return $nombres;
    }

    /*
        Método ordenar()  (opcional)
        Descripción: ordena la tabla por el campo indicado. Si el campo no es válido, por apellidos.
    */
    public function ordenar(string $campo): void
    {
        usort($this->talumnos, function (Alumno $a, Alumno $b) use ($campo) {
            return match ($campo) {
                'id'           => $a->id <=> $b->id,
                'email'        => strcasecmp($a->email, $b->email),
                'f_nacimiento' => strcmp($a->f_nacimiento, $b->f_nacimiento),
                'curso'        => $a->curso <=> $b->curso,
                default        => strcasecmp($a->apellidos . ' ' . $a->nombre, $b->apellidos . ' ' . $b->nombre),
            };
        });
    }

    /*
        Método buscar()  (opcional)
        Descripción: devuelve un array con los alumnos cuyo nombre, apellidos, email,
                     curso o asignaturas contienen el texto buscado.
    */
    public function buscar(string $texto): array
    {
        $texto = trim($texto);
        if ($texto === '') {
            return $this->talumnos;
        }

        $cursos = self::getCursos();
        $resultado = [];

        foreach ($this->talumnos as $alumno) {
            $campos = [
                $alumno->nombre,
                $alumno->apellidos,
                $alumno->email,
                $cursos[$alumno->curso] ?? ''
            ];
            $campos = array_merge($campos, $this->get_indice_asignaturas_a_nombres($alumno->asignaturas));

            foreach ($campos as $campo) {
                if (mb_stripos((string) $campo, $texto) !== false) {
                    $resultado[] = $alumno;
                    break;
                }
            }
        }

        return $resultado;
    }
}
