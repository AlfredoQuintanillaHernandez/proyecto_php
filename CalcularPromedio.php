
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos y notas</title>
</head>
<body>
<?php  
$promedio=0;
$suma=0; 
$NumeroNota=1;  
for($i=1;$i<=$_POST["Alumnos"];$i++){
    for($j=1;$j<=$_POST["Notas"];$j++){
        $suma+=$_POST[$NumeroNota];
        $NumeroNota++;
        }
        $promedio=round($suma/$_POST["Notas"],2);
        echo "<p>El promedio del Estudiante #$i es: $promedio </p>";
        $suma=0;
}
?>
<a href="ejercicio2.php">Calcular más promedios</a>
</body>
</html>