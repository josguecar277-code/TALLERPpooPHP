<?php

$cantidad = $_POST['cantidad'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Peliculas</title>
</head>
<body>
    <h2>Datos Peliculas</h2>

 <form action="index4.php" method="post">
<input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>" >

<?php for ($i = 1; $i <= $cantidad; $i++) { ?>

<h3>Pelicula <?php echo $i ; ?></h3>
<label>Titulo</label>
<input type="text" name="titulo<?php echo $i; ?>"> <br>

<label>Genero</label>
<input type="text" name="genero<?php echo $i; ?>"> <br>

<label>DuracionHoras</label>
<input type="number" name="duracionHor<?php echo $i; ?>" ><br>

<label>DuracionMinutos</label>
<input type="number" name="duracionmin<?php echo $i; ?>" ><br>

<label>Clasificacion</label>
<input type="text" name="clasificacion<?php echo $i; ?>" ><br>

<label>Calificacion ( 1-5 )</label>
<input type="number" name="calificacion<?php echo $i; ?>" ><br>


<?php } ?>


<button type="submit" name="registrar">Registrar películas</button>

 </form>

 </body>
</html>
