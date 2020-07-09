<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos y notas</title>
</head>
<form action="CalcularPromedio.php" method="post">
<?php
$NumeroNota=1;
$alumnos=$_POST["alumnos"];
$cantidad=$_POST["cantidad"];
for($i=1;$i<=$alumnos;$i++){
    echo "<p>Estudiante #$i</p>";
    for($j=1;$j<=$cantidad;$j++){
        echo "<label for='$NumeroNota'>Nota $j</label><input type='text' name='$NumeroNota' id='$NumeroNota'/>";
        $NumeroNota++;
    }
    echo "</br></br>";
}
?>
<input type="submit" value="Calcular promedio"/>
<input type="hidden" name="Alumnos" value="<?php echo $alumnos;?>"/>
<input type="hidden" name="Notas" value="<?php echo $cantidad;?>"/>
</form>
</body>
</html>