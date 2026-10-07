<?php

class Estudiante extends Persona {
    private array $cursos = [];
    private array $notas = [];

    public function inscribirCurso(Curso $curso): void {
        $this->cursos[] = $curso;
    }

    public function agregarNota(string $codigoCurso, float $nota): void {
        $this->notas[$codigoCurso][] = $nota;
    }

    public function calcularPromedio(string $codigoCurso) {
        if (!isset($this->notas[$codigoCurso])) {
            return 0;
        }

        $suma = 0;

        foreach ($this->notas[$codigoCurso] as $nota) {
            $suma += $nota;
        }

        return $suma / count($this->notas[$codigoCurso]);
    }


    public function mostrarInfo(): void {
        parent::mostrarInfo();

        echo "Tipo: Estudiante <br>";

        echo "Cursos inscritos: <br>";

        foreach ($this->cursos as $curso) {
            echo "- " . $curso->getNombre() . "<br>";
        }
    }
}