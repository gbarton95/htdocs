<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primera conexión a BBDD</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>

<header><h2>CONSULTA DE CLIENTES</h2></header>
<section>
    <nav></nav>
    <main>
      <?php
      $db_servidor = "localhost";
      $db_nombre     = "jardineria";
      $db_usuario    = "jardinero";
      $db_contra     = "jardinero";

      //////////////Establezco la conexión a la BBDD:////////////////
      // ---> $conexion=mysqli_connect(servidor, usuario, contraseña, [nombreBD])
      $conexion = mysqli_connect($db_servidor, $db_usuario, $db_contra, $db_nombre) or exit("No se puede conectar con el servidor");

      print "<h2>Conexión correcta...</h2><br>";
      ?>
        <div class=tablas style="overflow: auto;">
          <?php
          ///////////////Ejecuto mi primera instrucción://///////////////
          // ---> $resulconsulta=mysqli_query($conexion, sentenciaSQL)
          $consulta      = "SELECT CodigoCliente, NombreCliente, NombreContacto FROM clientes";
          $resulconsulta = mysqli_query($conexion, $consulta);

          /* Acordémonos de las distintas sentencias de mySQL:

            - Creación y borrado de BD (CREATE DATABASE y DROP DATABASE)
            - Creación, borrado y modificación de estructuras de tablas (CREATE TABLE, DROP TABLE, ALTER TABLE)
            - Insertar registros (INSERT ...), modificarlos (UPDATE …), borrarlos,...
            - Consulta de registros de una o varias tablas (SELECT…)     */

          /////////////Mostrar los resultados de una consulta///////////

          $nfilas = mysqli_num_rows($resulconsulta);
          //si hay más de 0 filas, imprímeme la siguiente tabla:
          if ($nfilas > 0) {
              //ABRO ETIQUETA TABLE
              print "<TABLE>";
              print "<TR>";
              print "<TH>CODIGO CLIENTE</TH>";
              print "<TH>NOMBRE CLIENTE</TH>";
              print "<TH>NOMBRE CONTACTO</TH>";
              print "</TR>";
          }
          //ahora metemos cada resultado en su sitio:
          for ($i = 0; $i < $nfilas; $i++) {
              $resultado = mysqli_fetch_array($resulconsulta);
              print "<TR>";
              print "<TD>" . $resultado['CodigoCliente'] . "</TD>";
              print "<TD>" . $resultado['NombreCliente'] . "</TD>";
              print "<TD>" . $resultado['NombreContacto'] . "</TD>";
              print "</TR>";
          }
          //CIERRO ETIQUETA TABLE cuando termino de llenar con datos
          print "</TABLE>\n";

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
