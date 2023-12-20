<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header><h1>REPASO 1ª EVALUACIÓN</h1></header>
    <div class="section">
        <nav></nav>
        <main>
            <h3 class="casa"><a href="repaso.php">Inicio</a></h3>
            <h2>EJERCICIO 1</h2>
            <div class="contenido">



            <form name="form1" method="post" action="PRUEBA1.php">

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


            <input type="submit" name="boton" id="boton" value="Enviar">

    </form>



            </div>
        </main>
        <aside></aside>
    </div>
    <footer></footer>


</body>
</html>