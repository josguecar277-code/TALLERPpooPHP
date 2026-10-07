<?php
require_once __DIR__ . '/../model/Pelicula.php';

class ControladorPelicula {
    public function registrarPeliculas(array $datos): array {
        $peliculas = [];

        foreach ($datos as $dato) {
            $duracion = Pelicula::convertirHorasMinutos($dato['horas'], $dato['minutos']);
            $peliculas[] = new Pelicula(
                $dato['titulo'],
                $dato['genero'],
                $duracion,
                $dato['clasificacion'],
                $dato['calificacion']
            );
        }

        return $peliculas;
    }

    public function calcularPromedio($peliculas) {
        if (count($peliculas) === 0) {
            return 0;
        }

        $suma = 0;
        foreach ($peliculas as $pelicula) {
            $suma += $pelicula->getCalificacion();
        }

        return $suma / count($peliculas);
    }
}
