<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
    <h1>EXAMEN 1ª EVALUACIÓN</h1>
</header>
    <section>
        <nav></nav>
        <main>
            <h2 class="titol">EJERCICIO 1</h2>
            <div class="contenido">
                <h2>Suma de matrices</h2>
                <p>Esta aplicación resuelve la suma de dos matrices cuadradas de dimension <i>NxN</i> cuyos elementos son números aleatorios entre -20 y 20. La dimensión <i>N</i> no puede ser mayor que 5.

                <?php //Coloco aquí mi php porque es donde quiero que aparezca el resultado

                if(isset($_REQUEST['mandar'])){
                    //Mi número entero:
                    $entero = $_POST['n'];
                    $array1 = [$entero];
                    $array2 = [$entero];

                    //Utilizo la función que he creado más abajo:
                    //$arraySumado = sumaMatricesN($array1, $array2, $entero);

                    echo $array1.length;

                }

                ?>

                <fieldset>
                    <form action="ej1.php" method="POST">
                        <label for="n">Introduzca la dimensión de las matrices:</label> <br><br>
                        <input type="number" id="n" name="n" min="1" max="5" title="Recuerde que debe ser un número entre 1 y 5" required>
                        <button type="submit" name="mandar">Enviar</button>
                    </form>
                </fieldset>
            </div>
        </main>
        <aside></aside>
    </section>
    <footer></footer>
</body>
</html>