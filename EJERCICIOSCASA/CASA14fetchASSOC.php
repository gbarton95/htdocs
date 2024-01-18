<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados asociativos con mysqliASSOC</title>
</head>
<body>
    <?php

        require("datos.php");

        $db_host="localhost";
        $db_nombre="pildorasinformaticas";
        $db_usuario="root";
        $db_contra="";

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

        $consulta="SELECT * FROM persona";

        $resultados=mysqli_query($conexion, $consulta);

        echo "<table><tr><td>";

        //en vez de resultados indexados, qué tal este método asociativo:
        while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

            echo $fila['NIF'] . "</td><td> ";
            echo $fila['Nombre'] . "</td><td> ";
            echo $fila['Apellido'] . "</td><td> ";
            echo $fila['Edad'] . "</td><td>";

        }

        echo "</td></tr></table>";

        mysqli_close($conexion);
    ?>
</body>
</html>