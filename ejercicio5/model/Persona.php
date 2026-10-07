<?php

class Persona {
    protected string $nombre;
    protected string $documento;
    protected string $correo;

    private static int $totalPersonas = 0;

    public function __construct(string $nombre, string $documento, string $correo) {
        $this->nombre = $nombre;
        $this->documento = $documento;
        $this->correo = $correo;

        self::$totalPersonas++;
    }

    public function mostrarInfo(): void {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Documento: " . $this->documento . "<br>";
        echo "Correo: " . $this->correo . "<br>";
    }

    public function validarCorreo(): bool {
        $tieneArroba = false;
        $tienePunto = false;

        for ($i = 0; $i < ($this->correo); $i++) {
            if ($this->correo[$i] == "@") {
                $tieneArroba = true;
            }
            
            if ($this->correo[$i] == ".") {
                $tienePunto = true;
            }
        }

        if ($tieneArroba && $tienePunto) {
            return true;
        }
        return false;
    }

    public static function validarDocumento(string $documento): bool {
        for ($i = 0; $i < ($documento); $i++) {
            
            if ($documento[$i] < '0' || $documento[$i] > '9') {
                return false;
            }
        }
        return true;
    } 

    public static function getTotalPersonas(): int {
        return self::$totalPersonas;
    }
    
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getDocumento(): string {
        return $this->documento;
    }

    public function getCorreo(): string {
        return $this->correo;
    }
}