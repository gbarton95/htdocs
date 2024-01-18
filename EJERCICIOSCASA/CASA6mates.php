<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mates</title>
</head>

<body>
    <!--No pongo 'action' en el form porque lo procesamos aquí-->
    <form name="form1" method="post">
        <p>
            <label for="num1">Primer número</label>
            <input type="text" name="num1" id="num1">
            <label for="num2">Segundo número</label>
            <input type="text" name="num2" id="num2">
            <label for="operacion">Escoge</label>
            <select name="operacion" id="operacion">
                <option>Suma</option>
                <option>Resta</option>
                <option>Multiplicación</option>
                <option>División</option>
                <option>Módulo</option>
            </select>
        </p>
        <p>
            <input type="submit" name="boton" id="boton" value="Enviar">
        </p>
    </form>
    <?php
        //si se ha pulsado el botón 'boton'...
        if(isset($_POST["boton"])){
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];

            //if("Suma"==$operacion){
            if(!strcmp("Suma",$operacion)){
                echo "El resultado es: " . ($numero1+$numero2);
            } else if(!strcmp("Resta",$operacion)){
                echo "El resultado es: " . ($numero1-$numero2);
            } else if(!strcmp("Multiplicación",$operacion)){
                echo "El resultado es: " . ($numero1*$numero2);
            } else if(!strcmp("División",$operacion)){
                echo "El resultado es: " . ($numero1/$numero2);
            }else if(!strcmp("Módulo",$operacion)){
                    echo "El resultado es: " . ($numero1%$numero2);
            }
        }
    ?>
</body>
</html>