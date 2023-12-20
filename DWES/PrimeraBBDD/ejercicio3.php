<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primera conexión a BBDD</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>

<header><h2>ESTADÍSTICA DE PRODUCTOS POR GAMA</h2></header>
<section>
  <nav></nav>
  <main>
      <!--PRIMER PHP-->
      <?php
        $db_servidor = "localhost";
      $db_usuario    = "jardinero";
      $db_contra     = "jardinero";
      $db_nombre     = "jardineria";

      $conexion = mysqli_connect($db_servidor, $db_usuario, $db_contra, $db_nombre) or exit("No se puede conectar con el servidor");

      print "<h2>Estadística de productos por gama</h2><br>";
      ?>
    <div class="tablas">

    <?php
      $select = "SELECT gamasproductos.Gama, gamasproductos.DescripcionTexto, productos.CantidadEnStock FROM gamasproductos JOIN productos ON gamasproductos.Gama = productos.Gama GROUP BY gamasproductos.Gama;";
      $resulconsulta = mysqli_query($conexion, $select);

          //imprimo la cabecera de mi tabla
          print " <div class='tablas'>
                            <table>
                              <tr>
                                <th>Gama</th>
                                <th>Descripción</th>
                                <th>Nº de Productos</th>
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

      ////////////////////Me acuerdo de cerrar la conexión//////////////
      mysqli_close($conexion);

      ?>
    </div>
  </main>
  <aside></aside>
</section>
<footer></footer>
</body>
</html>