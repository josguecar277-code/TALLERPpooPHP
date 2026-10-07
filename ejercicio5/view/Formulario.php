<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma Académica</title>
</head>
<body>

    <h1>Plataforma Académica</h1>

    <form action="indexIE.php" method="POST">

        <label>Cantidad de estudiantes:</label>
        <input type="number" name="cantidadEstudiantes" min="1" required>
        
        <br><br>

        <label>Cantidad de docentes:</label>
        <input type="number" name="cantidadDocentes" min="1" required>

        <br><br>

        <label>Cantidad de administrativos:</label>
        <input type="number" name="cantidadAdmin" min="1" required>

        <br><br>

        <label>Cantidad de cursos:</label>
        <input type="number" name="cantidadCursos" min="1" required>

        <br><br>

        <button type="submit" name="crear">Continuar</button>
    </form>
</body>
</html>