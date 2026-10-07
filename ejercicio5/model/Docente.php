<?php

class Docente extends Persona {

    private $cursos = [];

    public function asignarCurso($curso) {
        $this->cursos[] = $curso;
    }

    public function registrarNota($estudiante, $codigoCurso, $nota) {
        $estudiante->agregarNota($codigoCurso, $nota);
    }

    public function mostrarInfo() {

        parent::mostrarInfo();

        echo "Tipo: Docente <br>";
        echo "Cursos asignados: <br>";

        foreach ($this->cursos as $curso) {
            echo "- " . $curso->getNombre() . "<br>";
        }
    }
}
