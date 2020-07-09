<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numeros impares</title>
</head>
<body>
    <?php
    $i=1;
    echo "<p><strong>1 al 20</strong></p>";
    while($i<=20){
        if($i%2!=0){
        echo"<p>$i</p>";
      }
      $i++;
    }
    $i=50;
    echo "<p><strong>50 al 100</strong></p>";
    for($i;$i<=100;$i++){
        if($i%2!=0){
            echo"<p>$i</p>";
        }
    }
    
    ?>
</body>
</html>