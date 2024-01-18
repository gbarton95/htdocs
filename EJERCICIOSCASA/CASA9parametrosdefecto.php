<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parámetros por defecto</title>
</head>
<body>
    <?php
        function frase_mayus($frase, $conversion=true) {

            $frase = strtolower($frase);

            if($conversion==true) {
                $resultado=ucwords($frase);
            }else{
                $resultado=strtoupper($frase);
            }

            return $resultado;
        }

        //Aquí sólo metemos un parámetro, así que para el segundo toma el valor por defecto
        echo(frase_mayus("esto es una prueba <br>"));
        //Aquí sí especificamos el segundo parámetro
        echo(frase_mayus("esto es una prueba <br>", false));
    ?>
</body>
</html>