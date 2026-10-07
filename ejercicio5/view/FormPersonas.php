<?php

$cantidadEstudiantes = $_POST["cantidadEstudiantes"];
$cantidadDocentes = $_POST["cantidadDocentes"];
$cantidadAdmin = $_POST["cantidadAdmin"];
$cantidadCursos = $_POST["cantidadCursos"];



echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Registro Académico</title>";
echo "</head>";
echo "<body>";

echo "<h1>Registro de personas</h1>";

echo "<form action='indexIE.php' method='POST'>";


    echo "<form action='indexIE.php' method='POST'>";

        echo "<h2>Estudiantes</h2>";

        for ($i = 0; $i < $cantidadEstudiantes; $i++) {
            $numero = $i + 1;

            echo "<h3>Estudiante $numero</h3>";

            echo "Nombre: ";
            echo "<input type='text' name='estudiantes[$i][nombre]' required>";

            echo "<br><br>";

            echo "Documento: ";
            echo "<input type='text' name='estudiantes[$i][documento]' required>";

            echo "<br><br>";

            echo "Correo: ";
            echo "<input type='email' name='estudiantes[$i][correo]' required>";

            echo "<br><br>";
        }

    echo "<h2>Docentes</h2>";
    for ($i = 0; $i < $cantidadDocentes; $i++) {
        $numero = $i + 1;

        echo "<h3>Docente $numero</h3>";

        echo "Nombre: ";
        echo "<input type='text' name='docentes[$i][nombre]' required>";

        echo "<br><br>";

        echo "Documento: ";
        echo "<input type='text' name='docentes[$i][documento]' required>";

        echo "<br><br>";

        echo "Correo: ";
        echo "<input type='email' name='docentes[$i][correo]' required>";

        echo "<br><br>";
    }

    echo "<h2>Personal administrativo</h2>";

    for ($i = 0; $i < $cantidadAdmin; $i++) {
        $numero = $i + 1;

        echo "<h3>Administrativo $numero</h3>";

        echo "Nombre: ";
        echo "<input type='text' name='administrativos[$i][nombre]' required>";

        echo "<br><br>";

        echo "Documento: ";
        echo "<input type='text' name='administrativos[$i][documento]' required>";

        echo "<br><br>";

        echo "Correo: ";
        echo "<input type='email' name='administrativos[$i][correo]' required>";

        echo "<br><br>";
    }


    echo "<h2>Cursos</h2>";

    for ($i = 0; $i < $cantidadCursos; $i++) {
        $numero = $i + 1;

        echo "<h3>Curso $numero</h3>";

        echo "Código: ";
        echo "<input type='text' name='cursos[$i][codigo]' required>";

        echo "<br><br>";

        echo "Nombre: ";
        echo "<input type='text' name='cursos[$i][nombre]' required>";

        echo "<br><br>";

        echo "Posición del docente: ";
        echo "<input type='number' name='cursos[$i][docente]' min='0' required>";

        echo "<p>Ejemplo: si desea asignar el primer docente, escriba 0.</p>";

        echo "<br><br>";
    }


    echo "<h2>Notas</h2>";

    echo "<p>Ingrese 3 notas por estudiante y curso.</p>";

    for ($i = 0; $i < $cantidadEstudiantes; $i++) {
        echo "<h3>Estudiante " . ($i + 1) . "</h3>";

        for ($j = 0; $j < $cantidadCursos; $j++) {

        echo "<h4>Curso " . ($j + 1) . "</h4>";

        // $codigoCurso = $_POST["Curso"][$j]["codigo"];
        // $nombreCurso = $_POST["Curso"][$j]["nombre"];
        // echo "<h4>Curso " . $codigoCurso . " - " . $nombreCurso . "</h4>";

        echo "Nota 1: ";
        echo "<input type='number' name='notas[$i][curso$j][]' min='0' max='5' required>";

        echo "<br><br>";

        echo "Nota 2: ";
        echo "<input type='number' name='notas[$i][curso$j][]' min='0' max='5' required>";

        echo "<br><br>";

        echo "Nota 3: ";
        echo "<input type='number' name='notas[$i][curso$j][]' min='0' max='5' required>";

        echo "<br><br>";

        }
    }

    echo "<button type='submit' name='registrar'>Registrar información</button>";


    echo "</form>";

echo "</body>";
echo "</html>";