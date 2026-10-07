<?php
require_once __DIR__ . '/../model/Cliente.php';
require_once __DIR__ . '/../model/Persona.php';
require_once __DIR__ . '/../model/Empresa.php';
require_once __DIR__ . '/../model/Banco.php';

$banco = new Banco ("Banco Morajal");

$p1 = new Persona("1012548791", "Andres Suarez", "30");
$banco->adCliente($p1);

$p2 = new Persona("1004568712", "Juanitaa Duarte", "17");
$banco->adCliente($p2);

$p3 = new Persona("1054872354", "Freddy Cortes", "23");
$banco->adCliente($p3);

$E1 = new Empresa("795246871", "DaviCO","Juan Serpa");
$banco->adCliente($E1);

$E2 = new Empresa("687812451", "Macvipo", "Sara Lopez");
$banco->adCliente($E2);


$clientes = $banco->obtClientes();

echo "<h3>Todos los Clientes</h3>";
foreach ($clientes as $cliente) {
    echo $cliente ->obtNombre() . "<br>";
}



echo "<h3>Todos los Nombres y Cedulas</h3>";
foreach ($clientes as $cliente){
    if ($cliente instanceof Persona){
        echo $cliente ->obtNombre() ." --- ". $cliente->obtIdentificacion() . "<br>";    
    }

}


echo "<h3>El Nombre y Representante de cada empresa</h3>";
foreach ($clientes as $cliente){
    if( $cliente instanceof Empresa ){
        echo $cliente->obtNombre() ." --- ". $cliente->obtRepresentante() . "<br>";
    }

}

echo "<h3>Nombre De los clientes menores de Edad</h3>";
foreach ($clientes as $cliente){
    if ($cliente instanceof Persona && $cliente->obtEdad() <18 ){
        echo $cliente->obtNombre() . "<br>";
            }
}   

echo "<h3>Nombre Y Edad del cliente mas Joven</h3>";

foreach ($clientes as $nuevo) {
    if ($nuevo instanceof Persona && $nuevo->obtEdad() <18){
        echo $nuevo->obtNombre() ."--". $nuevo->obtEdad() . "<br>";
    }
}

echo "<h3>Nombre y Edad del cliente mas Viejo</h3>";

foreach ($clientes as $viejos) {
    if ( $viejos instanceof Persona && $viejos->obtEdad() >18){
        echo $viejos->obtNombre()  ."--". $viejos->obtEdad(). "<br>";
    }
}




?>