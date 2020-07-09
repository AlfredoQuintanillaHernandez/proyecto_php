<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<form action="" method="post">
<label for="tabla">Seleccione un numero del 11 al 21</label></br>
<select name="tabla" id="tabla">
<?php  
for($i=11;$i<=21;$i++){
echo "<option value='$i'>$i</option>";
}
?>
</select>
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