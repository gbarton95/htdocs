<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php

        if(isset($_COOKIE["prueba"])){
            echo $_COOKIE["prueba"];
        } else {
            echo "La cookie no existe";
        }

    ?>
</body>
</html>