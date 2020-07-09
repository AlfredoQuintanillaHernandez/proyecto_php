<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<form action="" method="post">
<label>Calcular tablas del 11 al 21</label></br>
<input type="submit" value="Calcular tablas" name="Enviar"/>
</form>
<?php
if(isset($_POST["Enviar"])){
    $resultado=0;
    for($i=11;$i<=21;$i++){
        echo "<p>Tabla del $i</p>";
        for($j=1;$j<=10;$j++){
            $resultado=$j*$i;
            echo "<p>$j * $i = $resultado</p>";
        }
    echo "</br>";
    }
}
?>
</body>
</html>