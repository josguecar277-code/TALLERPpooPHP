<?php

$estudiantes = $datos['estudiantes'];
$docentes = $datos['docentes'];
$administrativos = $datos['administrativos'];
$cursos = $datos['cursos'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de la institución</title>
</head>
<body>

<h1>Resumen de la información registrada</h1>

<h2>Estudiantes</h2>
<?php foreach ($estudiantes as $estudiante): ?>
    <p>
        Nombre: <?php echo $estudiante->getNombre(); ?><br>
        Documento: <?php echo $estudiante->getDocumento(); ?><br>
        Correo: <?php echo $estudiante->getCorreo(); ?>
    </p>
<?php endforeach; ?>

<h2>Docentes</h2>
<?php foreach ($docentes as $docente): ?>
    <p>
        Nombre: <?php echo $docente->getNombre(); ?><br>
        Documento: <?php echo $docente->getDocumento(); ?><br>
        Correo: <?php echo $docente->getCorreo(); ?>
    </p>
<?php endforeach; ?>

<h2>Administrativos</h2>
<?php foreach ($administrativos as $administrativo): ?>
    <p>
        Nombre: <?php echo $administrativo->getNombre(); ?><br>
        Documento: <?php echo $administrativo->getDocumento(); ?><br>
        Correo: <?php echo $administrativo->getCorreo(); ?>
    </p>
<?php endforeach; ?>

<h2>Cursos</h2>
<?php foreach ($cursos as $curso): ?>
    <p>
        Nombre del curso: <?php echo $curso->getNombre(); ?><br>
        Código: <?php echo $curso->getCodigo(); ?>
    </p>

    <?php if ($curso->getDocente() !== null): ?>
        <p>
            Docente asignado: <?php echo $curso->getDocente()->getNombre(); ?>
        </p>
    <?php endif; ?>

    <h3>Promedios</h3>
    <?php foreach ($estudiantes as $estudiante): ?>
        <p>
            <?php echo $estudiante->getNombre(); ?>:
            <?php echo round($estudiante->calcularPromedio($curso->getCodigo()), 2); ?>
        </p>
    <?php endforeach; ?>

    <hr>
<?php endforeach; ?>

<h2>Total de personas registradas</h2>
<p><?php echo Persona::getTotalPersonas(); ?></p>

<a href="index5.php">Volver</a>

</body>
</html>
