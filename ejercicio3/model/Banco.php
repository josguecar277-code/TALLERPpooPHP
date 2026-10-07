<?php


class Banco {
    private $nombres;
    private $clientes;
    private $numeroDeClientes;


    public function __construct($nombres){
        $this->nombres = $nombres;
        $this->clientes = [];
        $this->numeroDeClientes = 0;
        

    }
    
    public function obtNombre(){
        return $this->nombres;
    }  

    public function cambiarNombre($camnom){
        $this->nombres = $camnom;

    }

    public function adCliente($cliente){
        $this->clientes[] = $cliente;
        $this->numeroDeClientes = $this->numeroDeClientes + 1;
    }

    public function obtNumClientes(){
        return $this->numeroDeClientes;
    }
    
    public function obtClientes(){
        return $this->clientes;

    }

    public function obtCliente($posicion){
       return $this->clientes[$posicion];

    }

    }


?>