<?php
require_once __DIR__ . '/controller/Controlador1.php';

$controladorCita = new ControladorCita();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero =  $_POST['numero'];
    $tipo = $_POST['tipo'];
    $tarifa = $_POST['tarifa'];

    $cita = $controladorCita->procesarCita($numero, $tipo, $tarifa);

    echo '<h1>Resultado de la cita</h1>';
    echo 'El número de la cita es: ' . $cita->getNumero() . '<br>';
    echo 'Esta cita es de tipo: ' . $cita->getTipo() . '<br>';
    echo 'Su tarifa normal es de: $' . $cita->getTarifa() . '<br>';
    echo 'Pero por ser de tipo ' . $cita->getTipo() . ' queda con un valor final de $' . $cita->calcularValorFinal() . '<br><br>';
    echo '<a href="index1.php">Crear otra cita</a>';
} else {
    require_once __DIR__ . '/view/principal1.php';
}
