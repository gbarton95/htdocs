<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programación Orientada a Objetos</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <header><h1>CALCULADORA RACIONALES</h1></header>
  <section>
    <nav></nav>
    <main>
        <div class="menu">
            <div class="col1">
                <fieldset>
                    <legend>Reglas de uso de la calculadora</legend>
                    <ul>
                        <li>La calculadora se usa escribiendo la operación completa</li>
                        <li>La operación será <b>Operando_1 operación Operando_2</b>.</li>
                        <li>Cada operando puede ser un número <i>positivo</i> <b>entero</b> o <b>racional</b>.</li>
                        <li>Los operadores racionales permitidos son <span class="azul">+ - * :</span></li>
                        <li>No se deben dejar espacios en blanco entre operandos y operación.</li>
                        <li>Ejemplos:
                            <ul>
                                <li>5+4</li>
                                <li>5/2:2</li>
                                <li>1/4*2/3</li>
                                <li>2/7:1/3</li>
                            </ul>
                        </li>
                    </ul>
                </fieldset>
            </div>
            <div class="col2">
                <fieldset>
                    <legend>Establece la operación</legend>
                    <br>
                    <form action="ej3MAIN.php" method="POST">
                        <label>Operación</label>
                        <input type="text" size="10">
                        <input type="submit" value="Calcular">
                    </form>
                    <?php
                        if(isset($_REQUEST)){
                            echo '';
                        }
                    ?>
                    <br>
                </fieldset>
                <fieldset>
                    <legend>Resultado</legend>
                    <br>
                    <?php
                        if(isset($_REQUEST)){

                        }
                    ?>
                    <br>
                </fieldset>
            </div>
        <div>
    </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>