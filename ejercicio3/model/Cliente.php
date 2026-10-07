<?php


abstract class Cliente{
    protected $nombre;
   
    public function __construct($nombre) {
        $this->nombre = $nombre;
       
    }
    
    public function obtNombre(){
        return $this->nombre;
    }

    abstract public function obtIdentificacion();

}


?>