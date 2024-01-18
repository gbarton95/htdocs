<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primera conexión a BBDD</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>

<header><h2>CONSULTA DE CLIENTES POR PAÍS</h2></header>
<section>
  <nav></nav>
  <main>
    <!--Conexion-->
    <?php
    $db_host    = "localhost";
    $db_usuario = "jardinero";
    $db_contra  = "jardinero";
    $db_nombre  = "jardineria";

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    ?>

    <!--Dos partes de un PHP: sin requested y con requested-->
    <div>
        <?php

        if(!isset($_REQUEST['pais'])){

            print "<h2>Consulta de clientes por país</h2><br>";

            $select = "SELECT clientes.Pais FROM clientes GROUP BY clientes.Pais;";

            $resulconsulta = mysqli_query($conexion, $select);

            if($resulconsulta){

                print '<form action="ejercicio4.php" method="POST">
                <label for="pais">Elige País:</label>
                <select id="pais" name="pais">';

                while ($fila = mysqli_fetch_row($resulconsulta)) {
                    print '<option value="' . $fila[0] . '">' . $fila[0] .'</option>';
                }

                print '</select><br><br>
                <input type="submit" value="Enviar consulta">
                </form>';

            } else {
                print "Error en la consulta: " . mysqli_error($conexion);
            }

        } else {

            $variable = strtoupper($_REQUEST['pais']);

            print "<h2>LISTADO DE CLIENTES DE " . $variable . " EN BD JARDINERIA</h2><br>";

            $select = 'SELECT clientes.CodigoCliente, clientes.NombreCliente, clientes.NombreContacto, clientes.ApellidoContacto FROM clientes WHERE clientes.Pais="' . $variable . '";';

            $resulconsulta2 = mysqli_query($conexion, $select);

            //NO ENTIENDO CÓMO HACER ESTO SIN CAGARLA
            //SI USO EL FETCH SE ME COME LA PRIMERA LÍNEA
            //¿SE PUEDE RESETEAR A 0?
            if($resulconsulta2 == null) {
                print "No hay clientes en el país seleccionado";
            } else {
                //imprimo la cabecera de mi tabla
                print " <div class='tablas'>
                              <table>
                                <tr>
                                  <th>CÓDIGO</th>
                                  <th>NOMBRE</th>
                                  <th>NOMBRE CONTACTO</th>
                                  <th>APELLIDO CONTACTO</th>
                                </tr> ";
                //imprimo cada fila de mi tabla
                while ($fila = mysqli_fetch_row($resulconsulta2)) {
                    print "<tr>
                        <td>" . $fila[0] . "</td>
                        <td>" . $fila[1] . "</td>
                        <td>" . $fila[2] . "</td>
                        <td>" . $fila[3] . "</td>
                      </tr>";
                }
                print "</table></div>";

                print "<br><a href='ejercicio4.php'>Realizar nueva consulta</a>";
            }

        }

          ////////////////////¿La cierro aquí?//////////////
      mysqli_close($conexion);

        ?>
    </div>
  </main>
  <aside></aside>
</section>
<footer></footer>
</body>
</html>