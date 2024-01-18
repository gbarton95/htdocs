<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora (basada en CASA6mates.php)</title>
</head>

<body>
    <!--Le quito el action al formulario para que no se vaya de la pag-->
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
                <option>incremento</option>
                <option>decremento</option>
            </select>
        </p>
        <p>
            <input type="submit" name="boton" id="boton" value="Enviar">
        </p>
    </form>
    <!--Y aquí es donde invocamos el php externo: -->
    <?php
        include("PRUEBA1.php");
    ?>
</body>
</html>