<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables estáticas</title>
</head>
<body>
    
<?php
//Al poner 'static' al contador, no se reinicia cada vez que invocamos la función
    function incrementaVariable(){
        static $contador=0;
        $contador++;

        echo $contador . "<br>";
    }

    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();

?>

</body>
</html>