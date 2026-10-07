<?php

require_once __DIR__ . '/../model/Persona.php';
require_once __DIR__ . '/../model/Estudiante.php';
require_once __DIR__ . '/../model/Curso.php';
require_once __DIR__ . '/../model/Admin.php';
require_once __DIR__ . '/../model/Docente.php';

class ControladorGestionAcademica {

    public function crearPersonas($informacion) {

        $estudiantes = [];
        $docentes = [];
        $administrativos = [];

        if (isset($informacion['estudiantes'])) {
            foreach ($informacion['estudiantes'] as $persona) {

                $estudiantes[] = new Estudiante(
                    $persona['nombre'],
                    $persona['documento'],
                    $persona['correo']
                );
            }
        }

        if (isset($informacion['docentes'])) {
            foreach ($informacion['docentes'] as $persona) {

                $docentes[] = new Docente(
                    $persona['nombre'],
                    $persona['documento'],
                    $persona['correo']
                );
            }
        }

        if (isset($informacion['administrativos'])) {
            foreach ($informacion['administrativos'] as $persona) {

                $administrativos[] = new Admin(
                    $persona['nombre'],
                    $persona['documento'],
                    $persona['correo']
                );
            }
        }

        return [
            'estudiantes' => $estudiantes,
            'docentes' => $docentes,
            'administrativos' => $administrativos
        ];
    }

    public function crearCursos($informacion, $estudiantes, $docentes) {

        $cursos = [];

        foreach ($informacion as $cursoInfo) {

            $curso = new Curso(
                $cursoInfo['codigo'],
                $cursoInfo['nombre']
            );

            $posicionDocente = (int)$cursoInfo['docente'];

            if (isset($docentes[$posicionDocente])) {
                $curso->asignarDocente($docentes[$posicionDocente]);
            }

            $cursos[] = $curso;
        }

        return $cursos;
    }

    public function guardarNotas($notas, $estudiantes, $cursos) {

        foreach ($notas as $posicionEstudiante => $notasCursos) {

            if (!isset($estudiantes[$posicionEstudiante])) {
                continue;
            }

            foreach ($notasCursos as $nombreCurso => $listaNotas) {

                $posicionCurso = (int)str_replace("curso", "", $nombreCurso);

                if (!isset($cursos[$posicionCurso])) {
                    continue;
                }

                $codigoCurso = $cursos[$posicionCurso]->getCodigo();

                foreach ($listaNotas as $nota) {

                    $estudiantes[$posicionEstudiante]->agregarNota(
                        $codigoCurso,
                        (float)$nota
                    );
                }
            }
        }
    }
}
