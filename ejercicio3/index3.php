<?php
require_once __DIR__ . '/controller/Controlador3.php';


$controlador = new ControladorBanco();
$banco = $controlador->crearBanco();
$clientes = $banco->obtClientes();

echo '<h2>1. Todos los clientes</h2>';
foreach ($clientes as $cliente) {
    echo $cliente->obtNombre() . '<br>';
}

echo '<h2>2. Nombres y cédulas de las personas</h2>';
foreach ($clientes as $cliente) {
    if ($cliente instanceof Persona) {
        echo $cliente->obtNombre() . ' --- ' . $cliente->obtIdentificacion() . '<br>';
    }
}

echo '<h2>3. Empresas y representantes</h2>';
foreach ($clientes as $cliente) {
    if ($cliente instanceof Empresa) {
        echo $cliente->obtNombre() . ' --- ' . $cliente->obtRepresentante() . '<br>';
    }
}

echo '<h2>4. Clientes menores de edad</h2>';
foreach ($clientes as $cliente) {
    if ($cliente instanceof Persona && $cliente->obtEdad() < 18) {
        echo $cliente->obtNombre() . ' --- ' . $cliente->obtEdad() . ' años<br>';
    }
}

$masJoven = null;
$masViejo = null;
foreach ($clientes as $cliente) {
    if ($cliente instanceof Persona) {
        if ($masJoven === null || $cliente->obtEdad() < $masJoven->obtEdad()) {
            $masJoven = $cliente;
        }
        if ($masViejo === null || $cliente->obtEdad() > $masViejo->obtEdad()) {
            $masViejo = $cliente;
        }
    }
}

echo '<h2>5. Cliente más joven</h2>';
echo $masJoven->obtNombre() . ' --- ' . $masJoven->obtEdad() . ' años<br>';

echo '<h2>6. Cliente más viejo</h2>';
echo $masViejo->obtNombre() . ' --- ' . $masViejo->obtEdad() . ' años<br>';
?>
