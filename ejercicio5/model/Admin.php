<?php

class Admin extends Persona {
    
    public function gestionarProceso(string $proceso): void {
        echo "Proceso académico gestionado: " . $proceso . "<br>";
    }

    public function mostrarInfo(): void {
        parent::mostrarInfo();

        echo "Tipo: Personal administrativo <br>";
    }
}