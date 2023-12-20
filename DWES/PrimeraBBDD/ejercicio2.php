<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primera conexión a BBDD</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>

<header><h2>CONSULTA DE PRODUCTOS</h2></header>
<section>
  <nav></nav>
  <main>
    <div>
      <!--PRIMER PHP-->
      <?php
        $db_servidor = "localhost";
      $db_usuario    = "jardinero";
      $db_contra     = "jardinero";
      $db_nombre     = "jardineria";

      $conexion = mysqli_connect($db_servidor, $db_usuario, $db_contra, $db_nombre) or exit("No se puede conectar con el servidor");

      print "<h2>Consulta de productos por gama</h2><br>";
      ?>
    </div>

      <?php

      //Si NO hemos activado un request...
      if(!isset($_REQUEST['gamas'])) {

          //Primero la consulta para hacer el desplegable:
          $select        = "SELECT gamasproductos.gama FROM gamasproductos;";
          $resulconsulta = mysqli_query($conexion, $select);

          // Verificar si la consulta fue exitosa
          if ($resulconsulta) {
              // Obtener filas de resultados
              print '<form action="ejercicio2.php" method="POST">
            <label for="gamas">Elige una de las gamas de productos disponible:</label>
            <select id="gamas" name="gamas">';

              while ($fila = mysqli_fetch_row($resulconsulta)) {
                  // Agregar cada fila al array de resultados
                  print '<option value="' . $fila[0] . '">' . $fila[0] . '</option>';
              }

              print '</select><br><br>
            <input type="submit" value="Enviar consulta">
            </form>';

          } else {
              // Manejar el error si la consulta falla
              print "Error en la consulta: " . mysqli_error($conexion);
          }
      } else {
          $variable = $_REQUEST['gamas'];

          $select        = "SELECT gamasproductos.gama FROM gamasproductos;";
          $resulconsulta = mysqli_query($conexion, $select);

          $consulta = "SELECT codigoproducto, nombre, cantidadenstock
            FROM productos WHERE gama='" . $_REQUEST['gamas'] . "'";

          $resulconsulta = mysqli_query($conexion, $consulta);

          if(mysqli_fetch_row($resulconsulta) == null) {
              print "No hay productos de la gama seleccionada";
          } else {
              //imprimo la cabecera de mi tabla
              print " <div class='tablas'>
                            <table>
                              <tr>
                                <th>Código producto</th>
                                <th>Nombre</th>
                                <th>CantidadEnStock</th>
                              </tr> ";
              //imprimo cada fila de mi tabla

              while ($fila = mysqli_fetch_row($resulconsulta)) {
                  print "<tr>
                      <td>" . $fila[0] . "</td>
                      <td>" . $fila[1] . "</td>
                      <td>" . $fila[2] . "</td>
                    </tr>";
              }
              print "</table></div>";

              print "<br><a href='ejercicio2.php'>Realizar nueva consulta</a>";
          }
      }
      ////////////////////Me acuerdo de cerrar la conexión//////////////
      mysqli_close($conexion);

      ?>

  </main>
  <aside></aside>
</section>
<footer></footer>
</body>
</html>
