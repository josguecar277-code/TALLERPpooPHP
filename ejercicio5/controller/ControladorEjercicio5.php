<?php

require_once __DIR__ . '/../model/Persona.php';
require_once __DIR__ . '/../model/Estudiante.php';
require_once __DIR__ . '/../model/Docente.php';
require_once __DIR__ . '/../model/Admin.php';
require_once __DIR__ . '/../model/Curso.php';

class ControladorAcademico {
    public function registrarPersonas(array $datos): array {
        $estudiantes = [];
        $docentes = [];
        $administrativos = [];

        foreach ($datos["estudiantes"] as $dato) {
            $estudiante = new Estudiante(
                $dato["nombre"],
                $dato["documento"],
                $dato["correo"]
            );

            $estudiantes[] = $estudiante;
        }

        foreach ($datos["docentes"] as $dato) {
            $docente = new Docente(
                $dato["nombre"],
                $dato["documento"],
                $dato["correo"]
            );

            $docentes[] = $docente;
        }

        foreach ($datos["administrativos"] as $dato) {
            $administrativo = new Admin(
                $dato["nombre"],
                $dato["documento"],
                $dato["correo"]
            );

            $administrativos[] = $administrativo;
        }

        return [
            "estudiantes" => $estudiantes,
            "docentes" => $docentes,
            "administrativos" => $administrativos
        ];
    }

    public function registrarCursos(array $datos, array $estudiantes, array $docentes): array {
    
        $cursos = [];

        foreach ($datos as $dato) {
            $curso = new Curso(
                $dato["codigo"],
                $dato["nombre"]
            );

            $posicionDocente = $dato["docente"];

            if (isset($docentes[$posicionDocente])) {
                $curso->asignarDocente($docentes[$posicionDocente]);
            }

            if (isset($dato["estudiantes"])) {
                foreach ($dato["estudiantes"] as $posicionEstudiante) {
                    if (isset($estudiantes[$posicionEstudiante])) {
                        $curso->agregarEstudiante($estudiantes[$posicionEstudiante]);
                    }
                }
            }
            
            $cursos[] = $curso;
        }

        return $cursos;
    }

    
    public function registrarNotas(array $notas, array $estudiantes, array $cursos): void {
        foreach ($notas as $posicionEstudiante => $cursosEstudiante) {
            foreach ($cursosEstudiante as $curso => $notasCurso) {

            $posicionCurso = substr($curso, 5);
            $codigoCurso = $cursos[$posicionCurso]->getCodigo();
            
                foreach ($notasCurso as $nota) {
                    $estudiantes[$posicionEstudiante]->agregarNota($codigoCurso, $nota);
                }
            }
        }
    }
}