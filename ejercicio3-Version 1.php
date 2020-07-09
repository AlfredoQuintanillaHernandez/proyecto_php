<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<form action="" method="post">
<label for="tabla">Número del 11 al 21</label>
<input type="number" name="tabla" id="tabla" required min="11" max="21" value="11"/>
<input type="submit" value="Calcular tabla" name="Enviar"/>
</form>
<?php
if(isset($_POST["Enviar"])){
    $tabla=$_POST['tabla'];
    echo "<p>Tabla del $tabla</p>";
    for($i=1;$i<=10;$i++){
        echo "<p>$i * $tabla = ".($i*$tabla)."</p>";
    }
}
?>
</body>
</html>