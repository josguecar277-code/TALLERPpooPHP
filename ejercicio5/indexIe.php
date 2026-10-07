<?php

if (isset($_POST["crear"])) {
    require_once __DIR__ . '/view/FormPersonas.php';
} elseif (isset($_POST["registrar"])) {
    require_once __DIR__ . '/controller/ControladorEjercicio5.php';

    $controlador = new ControladorAcademico();


    $personas = $controlador->registrarPersonas(["estudiantes" => $_POST["estudiantes"], "docentes" => $_POST["docentes"], "administrativos" => $_POST["administrativos"]]);

    $estudiantes = $personas["estudiantes"];
    $docentes = $personas["docentes"];
    $administrativos = $personas["administrativos"];

    $cursos = $controlador->registrarCursos($_POST["cursos"], $estudiantes, $docentes);
    $controlador->registrarNotas($_POST["notas"], $estudiantes, $cursos);

    $datos = ["estudiantes" => $estudiantes, "docentes" => $docentes, "administrativos" => $administrativos, "cursos" => $cursos];

    require_once __DIR__ . '/view/Resultado.php';
} else {
    require_once __DIR__ . '/view/formulario.php';
}