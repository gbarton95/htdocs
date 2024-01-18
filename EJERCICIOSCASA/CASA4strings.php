<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <style>
        .resaltar{
            color:#F00;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <?php
    //cuidado con las comillas
    echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
    echo "<p class=\"resaltar\">Esto es otro ejemplo</p>";
    
    //fíjate en la diferencia de las comillas
    $nombre="Gaby";
    echo "Hola $nombre <br>";
    echo 'Hola $nombre <br>';

    //comparar Strings con strcmp y strcasecmp:
    $variable1="Casa";
    $variable2="CASA";
    $resultado=strcmp($variable1,$variable2);
    if($resultado){
        echo "No coinciden <br>";
    }else{
        echo "Coinciden <br>";
    }
    $resultadocase=strcasecmp($variable1,$variable2);
    if($resultadocase){
        echo "No coinciden <br>";
    }else{
        echo "Coinciden <br>";
    }

    ?>
</body>
</html>