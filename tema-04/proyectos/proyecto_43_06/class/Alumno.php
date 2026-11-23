<?php


/**
 * Clase Alumno
 *
 * @description Clase que representa a un alumno. POO SIN encapsulamiento:
 *              todas las propiedades son públicas y se acceden directamente ($alumno->nombre).
 *
 * @atributos:
 *  - $id: identificador único del alumno.
 *  - $nombre: nombre del alumno.
 *  - $apellidos: apellidos del alumno.
 *  - $email: correo electrónico.
 *  - $f_nacimiento: fecha de nacimiento (formato YYYY-MM-DD, el que envía <input type="date">).
 *  - $curso: ÍNDICE del curso seleccionado en una lista desplegable (ver TablaAlumnos::getCursos()).
 *  - $asignaturas: array con los ÍNDICES de las asignaturas marcadas en una lista checkbox
 *                  (ver TablaAlumnos::getAsignaturas()).
 *
 * @métodos:
 *  - constructor: parámetros opcionales.
 *  - getEdad(): devuelve la edad del alumno a partir de su fecha de nacimiento.
 */
class Alumno
{
    public ?int $id;
    public ?string $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?string $f_nacimiento;
    public ?int $curso;
    public ?array $asignaturas;

    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $email = null,
        ?string $f_nacimiento = null,
        ?int $curso = null,
        ?array $asignaturas = []
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignaturas = $asignaturas;
    }

    /*
        Método getEdad()
        Descripción: devuelve la edad (en años cumplidos) a partir de la fecha de nacimiento.
                     Si no hay fecha o no es válida devuelve null.
    */
    public function getEdad(): ?int
    {
        if (empty($this->f_nacimiento)) {
            return null;
        }

        try {
            $nacimiento = new DateTime($this->f_nacimiento);
        } catch (Exception $e) {
            return null;
        }

        return $nacimiento->diff(new DateTime('today'))->y;
    }
}
