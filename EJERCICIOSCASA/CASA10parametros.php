<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parámetros por valor y por referencia</title>
</head>
<body>
    <?php

    //función con parámetro por valor
    function incrementa($valor1){
        $valor1++;
        return $valor1;
    }

    $numero=5;
    echo incrementa($numero) . "<br>";

    echo $numero . "<br><br>";

    //función con parámetro por referencia (con &)
    function incrementaa(&$valor2){
        $valor2++;
        return $valor2;
    }

    $numera=5;
    echo incrementaa($numera) . "<br>";

    echo $numera;


    ?>
</body>
</html>