<?php

class Bus {
    private $placa;
    private $capacidadPasajeros;
    private $preciosPasaje;
    private $pasajerosActuales;
    private $totalPasajeros;


    public function __construct($placa, $capacidadPasajeros, $preciosPasaje) {
        $this->placa = $placa;
        $this->capacidadPasajeros = $capacidadPasajeros;
        $this->preciosPasaje = $preciosPasaje;
        $this->pasajerosActuales = 0;
        $this->totalPasajeros = 0; 

}

public function getPlaca(){
 return $this-> placa;
}

public function getCapacidad(){
    return $this->capacidadPasajeros;
}

public function getPrecioPasaje(){
    return $this-> preciosPasaje;
}

public function getPasajerosActuales(){
    return $this-> pasajerosActuales;

    
}
public function getPasajerosTotales(){
    return $this->totalPasajeros;
}

public function subirPasajeros($pasajeros){
    if ($this->pasajerosActuales + $pasajeros <= $this->capacidadPasajeros){
    //
        $this->pasajerosActuales = $this->pasajerosActuales + $pasajeros;
        $this->totalPasajeros = $this->totalPasajeros + $pasajeros;
    } else{
        echo "no hay cupo";
    }
}

public function bajarpasajeros($pasajeros){
    if ( $pasajeros <= $this->pasajerosActuales){
        $this->pasajerosActuales = $this->pasajerosActuales - $pasajeros;
    
    } else{
        echo "no hay suficiente pasajeros para esa cantidad";
    }

}
public function getDineroAcumulado (){
    return $this->totalPasajeros * $this->preciosPasaje;
}


}