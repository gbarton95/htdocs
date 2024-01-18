<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hola mundo, hoy es miércoles";
    //puedo incluir código de otro sitio con 'include'.
    //si no lo encuentra, no lo mostrará y ya está.
    //si uso 'require' y no lo encuentra, se cae.
        include("CASA1.php");
    ?>
</body>
</html>