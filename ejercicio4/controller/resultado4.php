    <?php
    // var_dump($_POST);
   require_once __DIR__ . '/../model/Pelicula.php';

    $cantidad = $_POST['cantidad'];
    $peliculas = [];    

    for ($i = 1; $i <= $cantidad; $i++) {
        $titulo = $_POST['titulo' . $i];
        $genero = $_POST['genero' . $i];
        $horas = $_POST['duracionHor' . $i];
        $minutos = $_POST['duracionmin' . $i];
        $clasificacion = $_POST['clasificacion' . $i];
        $calificacion = $_POST['calificacion' . $i];
  
    $duracion = Pelicula::convertirHorasMinutos($horas, $minutos); //static se puede usar ese metodo sin crear un obt de la clase
    $pelis = new Pelicula ($titulo, $genero, $duracion, $clasificacion, $calificacion);

    $peliculas [] = $pelis;
    
    
    }
    
   
echo "<h3>Catalogo </h3>";

foreach ($peliculas as $pelicula){
    echo $pelicula-> mostrarInfo() . "<br>";
if ($pelicula ->esRecomendada() )  {
    echo " --Recomendada <br>";
}
}


$suma = 0;
foreach ($peliculas as $pelicula){
    $suma = $suma + $pelicula->getCalificacion();
}
$promedio = $suma / count($peliculas);

echo "Promedio de Calificaciones: ". $promedio . "<br>";
echo "Total de peliculas registradas: " .count($peliculas). "<br>";

    
?>