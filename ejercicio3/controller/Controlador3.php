<?php
require_once __DIR__ . '/../model/Banco.php';
require_once __DIR__ . '/../model/Persona.php';
require_once __DIR__ . '/../model/Empresa.php';

class ControladorBanco {
    public function crearBanco() {
        $banco = new Banco('Banco Morajal');

        $p1 = new Persona('1012548791', 'Andres Suarez', 30);
        $p2 = new Persona('1004568712', 'Juanitaa Duarte', 17);
        $p3 = new Persona('1054872354', 'Freddy Cortes', 23);

        $e1 = new Empresa('795246871', 'DaviCO', 'Juan Serpa');
        $e2 = new Empresa('687812451', 'Macvipo', 'Sara Lopez');

        $banco->adCliente($p1);
        $banco->adCliente($p2);
        $banco->adCliente($p3);
        $banco->adCliente($e1);
        $banco->adCliente($e2);

        return $banco;
    }
}








