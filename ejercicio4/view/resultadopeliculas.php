<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas registradas</title>
</head>

<body>

    <h1>Películas Registradas</h1>

    <?php foreach ($peliculas as $pelicula) { ?>

        <h2><?php echo $pelicula->getTitulo(); ?></h2>

        <p>Género:<?php echo $pelicula->getGenero(); ?></p>

        <p>Duración:<?php echo $pelicula->getDuracion(); ?> minutos</p>

        <p>Clasificación:<?php echo $pelicula->getClasificacion(); ?></p>

        <p>Calificación:<?php echo $pelicula->getCalificacion(); ?></p>

        <?php
         if ($pelicula->esRecomendada()) { 
         ?>
<p>Película recomendada</p>

        <?php 
        } else { 
        ?>

 <p>Película no recomendada</p>

        <?php } 
        ?>

        <hr>

    <?php } ?>

    <h2>Promedio de calificaciones:<?php echo $promedio; ?></h2>

    <h2>Total de películas:<?php echo count($peliculas); ?></h2> <br>

    <a href="index4.php">Volver</a>

</body>

</html>