<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones matemáticas</title>
</head>
<body>
    <?php
        //Número aleatorio RAND():
        $num1=rand();
        echo "El número aleatorio es:______________________________" . $num1;

        //Número aleatorio entre dos valores:
        $num2=rand(10,50);
        echo "<br> El número aleatorio entre 10 y 50 es:___________________" . $num2;
    
        //Número redondeado a 2 decimales:
        echo "<br> El número 5.32543284789 redondeado a 2 decimales es:___" . round(5.32543284789, 2);
    
        //Potencias:
        echo "<br> Cinco al cubo es:__________________________________" . pow(5,3);
    ?>
</body>
</html>