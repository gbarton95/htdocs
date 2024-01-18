<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Recu</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h1>COMUNIDADES AUTÓNOMAS</h1>
    </header>
    <section>
        <nav></nav>
        <main>
            <?php

            //Conexión servidor y base de datos
            $conexion = mysqli_connect("localhost", "root", "", "geografia") or exit("No se puede seleccionar la base de datos");

            //////////////////////Lo que aparece cuando YA has hecho la consulta/////////////////////////////
            if(isset($_REQUEST['mandar'])) {
                $comunidad    = $_REQUEST['comunidad'];
                $instruccion1 = "SELECT id_comunidad, id_capital, max_provincias FROM comunidades WHERE nombre='$comunidad';";
                $consulta1     = mysqli_query($conexion, $instruccion1) or exit("Fallo en la consulta");

                //si todo va bien...
                if ($fila = mysqli_fetch_assoc($consulta1)) {
                    $idComunidad   = $fila['id_comunidad'];
                    $idCapital     = $fila['id_capital'];
                    $maxProvincias = $fila['max_provincias'];
                } else {
                    print "No se encontraron resultados para la comunidad " . $comunidad;
                }

                //Para sacar la capital, saco otra consulta:
                $instruccion2 = "SELECT nombre FROM provincias WHERE n_provincia='$idCapital';";
                $consulta2     = mysqli_query($conexion, $instruccion2) or exit("Fallo en la consulta");

                print "
                    <div class='ej3'>
                    <p>La capital de $comunidad es <strong>' ... '</strong></p>
                    </div>

                    <p><a href='RecuEj3.php'>Elegir otra comunidad autónoma</a></p>
                ";




                mysqli_close($conexion);

            } else {

                /////////////AL ABRIRSE LA PÁGINA ////////////

                //instruccion para seleccionar la comunidad autónoma
                $instruction  = "SELECT DISTINCT nombre FROM comunidades ORDER BY nombre;";
                $consultaCCAA = mysqli_query($conexion, $instruction) or exit("fallo en la consulta");

                //imprimo formulario con seleccionador de comunidad autónoma
                print
                    "<div class='ej3'>
                        <form action='RecuEj3.php' method='get'>
                            <label for='comunidad'>Elige una comunidad Autónoma: </label>
                            <select id='comunidad' name='comunidad'>";

                //para saber cuántas opciones hay tendré que poner en el select, lo obtengo así
                $nfilas = mysqli_num_rows($consultaCCAA);

                //y ahora hago un bucle con ese número para ir rellenando los option values
                for ($i = 0; $i < $nfilas; $i++) {
                    $resultado = mysqli_fetch_array($consultaCCAA);
                    print "<option value='" . $resultado['nombre'] . "'>" . $resultado['nombre'] . "</option>";
                }

                print "
                           </select>
                        <button type='submit' name='mandar'>Consultar datos</button>
                    </form>
                </div>
                ";
            }
            ?>
        </main>
        <aside></aside>
    </section>
    <footer></footer>
</body>
</html>