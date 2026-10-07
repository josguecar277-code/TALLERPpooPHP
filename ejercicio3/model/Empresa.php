<?php

 class Empresa extends Cliente {
    private $nit;
    private $representante;



    public function __construct($nit, $nombre, $representante){
        parent::__construct($nombre);
        $this->nit = $nit;
        $this->representante = $representante;

    }
    
    public function obtIdentificacion(){
        return $this->nit;
    }

    public function obtRepresentante(){
        return $this->representante;
    }

    public function cambiarRepresentante($repres){
         $this->representante = $repres;
    }



 }




?>