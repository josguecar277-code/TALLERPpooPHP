<?php

class Persona {

    protected $nombre;
    protected $documento;
    protected $correo;

    private static $totalPersonas = 0;

    public function __construct($nombre, $documento, $correo) {
        $this->nombre = $nombre;
        $this->documento = $documento;
        $this->correo = $correo;

        self::$totalPersonas++;
    }

    public function mostrarInfo() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Documento: " . $this->documento . "<br>";
        echo "Correo: " . $this->correo . "<br>";
    }

    public function validarCorreo() {
        return filter_var($this->correo, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validarDocumento($documento) {
        return ctype_digit($documento);
    }

    public static function getTotalPersonas() {
        return self::$totalPersonas;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getCorreo() {
        return $this->correo;
    }
}
