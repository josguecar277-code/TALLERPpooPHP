<?php

if (isset($_POST['crear'])) {

    require_once __DIR__ . '/view/FormPersonas.php';

} elseif (isset($_POST['registrar'])) {

    require_once __DIR__ . '/controller/ControladorEjercicio5.php';

    $controlador = new ControladorGestionAcademica();

    $datosPersonas = [
        'estudiantes' => isset($_POST['estudiantes']) ? $_POST['estudiantes'] : [],
        'docentes' => isset($_POST['docentes']) ? $_POST['docentes'] : [],
        'administrativos' => isset($_POST['administrativos']) ? $_POST['administrativos'] : []
    ];

    $personas = $controlador->crearPersonas($datosPersonas);

    $estudiantes = $personas['estudiantes'];
    $docentes = $personas['docentes'];
    $administrativos = $personas['administrativos'];

    $datosCursos = isset($_POST['cursos']) ? $_POST['cursos'] : [];

    $cursos = $controlador->crearCursos(
        $datosCursos,
        $estudiantes,
        $docentes
    );

    $notas = isset($_POST['notas']) ? $_POST['notas'] : [];

    $controlador->guardarNotas(
        $notas,
        $estudiantes,
        $cursos
    );

    $datos = [
        'estudiantes' => $estudiantes,
        'docentes' => $docentes,
        'administrativos' => $administrativos,
        'cursos' => $cursos
    ];

    require_once __DIR__ . '/view/Resultado.php';

} else {

    require_once __DIR__ . '/view/Formulario.php';
}
