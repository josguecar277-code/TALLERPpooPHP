<?php
// require_once __DIR__ . '/../model/Bus.php';
require_once __DIR__ . '/controller/Controlador2.php';

$controladorBus = new ControladorBus();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$placa = $_POST["placa"];
$capacidadPasajeros = $_POST["capacidad"];
$preciosPasaje = $_POST["precio"];
$subieron = $_POST["subirpasajeros"];
$bajaron = $_POST["bajarpasajeros"];

 $bus = $controladorBus->crearBus($placa, $capacidadPasajeros, $preciosPasaje);

echo "<h2>Bus creado</h2>";
echo "Placa :" . $bus->getPlaca() . "<br>";
echo "Capacidad : " . $bus->getCapacidad() . "<br>";
echo "Precio de Pasajeros" . $bus->getPrecioPasaje() . "<br>";

//////////////////////////////////////////////////////////////////////////

echo "<h2>Subir Pasajeros</h2>";
echo "<h4>Se subieron:</h4>";
 $bus ->subirPasajeros($subieron);
 echo $bus->getPasajerosActuales();

 /////////////////////////////////////////////////////////////////////////
echo "<h3>Bajar Pasajeros</h3>";
echo "<h4>Se bajaron:</h4>";
 $bus->bajarpasajeros($bajaron);
 echo $bus->getPasajerosActuales();
//////////////////////////////////////////////////////////////////////////
 echo "<h3>Resultado</h3>";
 echo "Pasajeros Totales : " . $bus->getPasajerosTotales() . "<br>";
 echo "Dinero Acumulado: " . $bus->getDineroAcumulado() . "<br>";

 echo '<a href="index2.php">Crear otro Bus</a>';
} else {
    require_once __DIR__ . '/view/principal2.php';
}
?>
