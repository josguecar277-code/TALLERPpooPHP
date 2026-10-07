<?php

class Curso {
    private string $codigo;
    private string $nombre;
    private $docente = null;
    private array $estudiantes = [];

    public function __construct(string $codigo, string $nombre) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

    public function asignarDocente(Docente $docente): void {
        $this->docente = $docente;
        $docente->asignarCurso($this);
    }

    public function agregarEstudiante(Estudiante $estudiante): void {
        $this->estudiantes[] = $estudiante;
        $estudiante->inscribirCurso($this);
    }

    public function getCodigo(): string {
        return $this->codigo;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function mostrarInfo(): void {
        echo "Código: " . $this->codigo . "<br>";
        echo "Curso: " . $this->nombre . "<br>";

        if ($this->docente != null) {
            echo "Docente: " . $this->docente->nombre . "<br>";
        }

        echo "Estudiantes inscritos: " . count($this->estudiantes) . "<br>";
    }
}