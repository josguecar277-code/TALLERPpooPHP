<?php

class Docente extends Persona {
    private array $cursos = [];


    public function asignarCurso(Curso $curso): void {
        $this->cursos[] = $curso;
    }

    public function registrarNota(Estudiante $estudiante, string $codigoCurso, float $nota): void {
        $estudiante->agregarNota($codigoCurso, $nota);
    }

    public function mostrarInfo(): void {
        parent::mostrarInfo();

        echo "Tipo: Docente <br>";

        echo "Cursos asignados: <br>";

        foreach ($this->cursos as $curso) {
            echo "- " . $curso->getNombre() . "<br>";
        }
    }
}