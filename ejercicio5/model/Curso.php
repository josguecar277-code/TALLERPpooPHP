<?php

class Curso {

    private $codigo;
    private $nombre;
    private $docente = null;
    private $estudiantes = [];

    public function __construct($codigo, $nombre) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

    public function asignarDocente($docente) {

        $this->docente = $docente;

        $docente->asignarCurso($this);
    }

    public function agregarEstudiante($estudiante) {

        $this->estudiantes[] = $estudiante;

        $estudiante->inscribirCurso($this);
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDocente() {
        return $this->docente;
    }

    public function mostrarInfo() {

        echo "Código: " . $this->codigo . "<br>";
        echo "Curso: " . $this->nombre . "<br>";

        if ($this->docente != null) {
            echo "Docente: " . $this->docente->getNombre() . "<br>";
        }

        echo "Estudiantes inscritos: " . count($this->estudiantes) . "<br>";
    }
}
