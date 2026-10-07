
<?php
require_once __DIR__ . '/../model/Bus.php';

class ControladorBus {
    public function crearBus($placa, $capacidad, $precioPasaje) {
        return new Bus($placa, $capacidad, $precioPasaje);
    }
}

