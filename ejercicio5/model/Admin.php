<?php

class Admin extends Persona {

    public function gestionarProceso($proceso) {
        echo "Proceso académico : " . $proceso . "<br>";
    }

    public function mostrarInfo() {

        parent::mostrarInfo();

        echo "Tipo: Personal Administrativo <br>";
    }
}
