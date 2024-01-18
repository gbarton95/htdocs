<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        
        //Primera forma de crear un array
        $semana[] = "Lunes";
        $semana[] = "Martes";
        $semana[] = "Miércoles";
        $semana[] = "Jueves";

        echo $semana[2] . "<br><br>";

        //Segunda forma de crear un array
        $otrasemana = array("Lunes","Martes","Miércoles");

        echo $otrasemana[2] . "<br><br>";

        //Crear un array asociativo
        $datos=array("Nombre"=>"Juan","Apellido"=>"Gómez","Edad"=>21);
        
        echo $datos["Apellido"] . "<br>";
                                echo "<br>";

        //Verificar si algo es un array
        if(is_array($datos)){
            echo "Es un array <br>";
        }
                                echo "<br>";

        //Para ordenar un array
        sort($semana);

        //Recorrer bucle normal
        for($i=0;$i<count($semana);$i++){
            echo $semana[$i] . "<br>";
        }
                                echo "<br>";

        //Recorrer un array asociativo
        foreach($datos as $clave=>$valor){
            echo "$clave: $valor <br>";
        }
                                echo "<br>";

        //Añadir un valor es tan sencillo como
        $datos["País"] = "España";
        foreach($datos as $clave=>$valor){
            echo "$clave: $valor <br>";
        }
                                echo "<br>";
    ?>
</body>
</html>