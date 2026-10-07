<?php
require_once __DIR__ . '/../model/Cita.php';

class ControladorCita {
    public function procesarCita($numero, $tipo, $tarifa) {
        return new Cita($numero, $tipo, $tarifa);
    }
}
