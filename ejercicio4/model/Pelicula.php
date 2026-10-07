<?php

class Pelicula {
    private $titulo;
    private $genero;
    private $duracion;
    private $clasificacion;
    private $calificacion;

    public function __construct($titulo, $genero, $duracion, $clasificacion, $calificacion) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracion = $duracion;
        $this->clasificacion = $clasificacion;
        $this->calificacion= $calificacion;
        
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function getDuracion(){
        return $this->duracion;
    }

    public function getClasificacion(){
        return $this->clasificacion;
    }

    public function getCalificacion(){
        return $this->calificacion;
    }

    public function esRecomendada(){
        return $this->calificacion >= 4;
    }

    public function mostrarInfo(){
        return $this->titulo ." - " . $this->genero . "  - ". $this->duracion .  "min";
    }


        public function validarCalificacion($calificacion){
            if($calificacion >=1 && $calificacion <=5){
                return true;
            }else{
                return false;
            }
            
        }

            public static function convertirHorasMinutos($horas ,$minutos){
            return ($horas * 60) + $minutos;
                }

        
}
?>