<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos y notas</title>
</head>
<body>
<form action="FormularioNotas.php" method="post">
<label for="alumnos">Número de alumnos:</label>
<input type="number" name="alumnos" id="alumnos " required>
<label for="cantidad">Cantidad de notas:</label>
<input type="number" name="cantidad" id="cantidad" required>
<input type="submit" value="Enviar" name="Enviar">
</form>
</body>
</html>