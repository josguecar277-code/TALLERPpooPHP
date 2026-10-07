<?php


class  Cita{
    private $numero;
    private $tipo;
    private $tarifa;
    private $valorfinal;
    


public function __construct($numero, $tipo, $tarifa){
    $this->numero = $numero;
    $this->tipo = $tipo;
    $this->tarifa = $tarifa;
    //  
   
}

    //GETTERS

        public function getNumero(){
            return $this->numero;
        }   



        public function getTipo(){

        if($this->tipo <= 3){
        return "General";
        }
        else{
        return "Especialista ";
    }

}
        public function getTarifa(){
            return $this->tarifa;
        }

        public function calcularValorFinal(){

        if($this->getTipo() == "General"){
        $valorfinal = $this->tarifa - ($this->tarifa * 0.50);
    }
        else{
        $valorfinal = $this->tarifa + ($this->tarifa * 0.50);
    }

    return $valorfinal;
}      
    
}



