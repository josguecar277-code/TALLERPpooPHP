<?php
require_once __DIR__ . '/../model/Cita.php';

 if (isset($_POST["numero"])) {


 $numero = $_POST["numero"];
 $tipo = $_POST["tipo"];
 $tarifa = $_POST["tarifa"];
//  $valorfinal= $_POST["valorfinal"];


$cita = new Cita ($numero, $tipo, $tarifa);

echo "el numero de la cita es: " . $cita->getNumero() . "<br>";
echo "Esta cita es de tipo: " . $cita->getTipo() . "<br>";
echo "Su tarifa normal es: " . $cita->getTarifa(). "<br>";
echo "Pero por ser de tipo: " . $cita->getTipo(). "<br>";

echo "queda con un valor final de $ " . $cita->calcularValorFinal();

   

 }  




?>