<?php

$estudiantes = $datos["estudiantes"];
$docentes = $datos["docentes"];
$admin =$datos["administrativos"];
$cursos = $datos["cursos"];

echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Resultados Académicos</title>";
echo "</head>";
echo "<body>";

echo "<h1>Estudiantes</h1>";

foreach ($estudiantes as $estudiante) {

    echo "Nombre: " . $estudiante->getNombre() . "<br>";

    echo "Documento: " . $estudiante->getDocumento() . "<br>";

    echo "Correo: " . $estudiante->getCorreo() . "<br><br>";

    echo "<br><br>";
}

echo "<h1>Docentes</h1>";

foreach ($docentes as $docente) {

    echo "Nombre: " . $docente->getNombre() . "<br>";

    echo "Documento: " . $docente->getDocumento() . "<br>";

    echo "Correo: " . $docente->getCorreo() . "<br>";

    echo "<br><br>";
}

echo "<h1>Personal administrativo</h1>";

foreach ($admin as $administrativo) {

    echo "Nombre: " . $administrativo->getNombre() . "<br>";

    echo "Documento: " . $administrativo->getDocumento() . "<br>";

    echo "Correo: " . $administrativo->getCorreo() . "<br>";

    echo "<br><br>";
}

echo "<h1>Cursos</h1>";

foreach ($cursos as $curso) {

    echo "Nombre: " . $curso->getNombre() . "<br>";

    echo "Código: " . $curso->getCodigo() . "<br>";

    echo "Promedio: " . round($estudiante->calcularPromedio($curso->getCodigo()), 2) . "<br><br>";

    echo "<br><br>";
}

echo "<h1>Total de personas</h1>";

echo "<p>" . Persona::getTotalPersonas() . "</p>";


echo "</body>";
echo "</html>";