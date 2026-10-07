<?php

if (isset($_POST['crear'])) {
    require_once __DIR__ . '/view/formulario_pelicula.php';
} elseif (isset($_POST['registrar'])) {
    require_once __DIR__ . '/controller/Controlador4.php';

    $datos = [];
    $cantidad = (int) $_POST['cantidad'];

    for ($i = 1; $i <= $cantidad; $i++) {
        $datos[] = [
            'titulo' => $_POST['titulo' . $i],
            'genero' => $_POST['genero' . $i],
            'horas' => (int) $_POST['duracionHor' . $i],
            'minutos' => (int) $_POST['duracionmin' . $i],
            'clasificacion' => $_POST['clasificacion' . $i],
            'calificacion' => (float) $_POST['calificacion' . $i]
        ];
    }

    $controlador = new ControladorPelicula();
    $peliculas = $controlador->registrarPeliculas($datos);
    $promedio = $controlador->calcularPromedio($peliculas);

    require_once __DIR__ . '/view/resultadopeliculas.php';
} else {
    require_once __DIR__ . '/view/principal4.php';
}
