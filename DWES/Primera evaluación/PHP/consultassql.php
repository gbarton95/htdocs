<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primera conexión a BBDD</title>
</head>

<body>

    <?php

      $db_servidor="localhost";
      $db_nombre="jardineria";
      $db_usuario="jardinero";
      $db_contra="jardinero";

      //////////////Establezco la conexión a la BBDD:////////////////
      // ---> $conexion=mysqli_connect(servidor, usuario, contraseña, [nombreBD])
      $conexion=mysqli_connect($db_servidor,$db_usuario,$db_contra,$db_nombre) or die ("No se puede conectar con el servidor");

      ///////////////Ejecuto mi primera instrucción://///////////////
      // ---> $resulconsulta=mysqli_query($conexion, sentenciaSQL)
      $consulta="SELECT CodigoCliente, NombreCliente, NombreContacto, Telefono FROM clientes";
      $resulconsulta=mysqli_query($conexion, $consulta);

      /* Acordémonos de las distintas sentencias de mySQL:

        - Creación y borrado de BD (CREATE DATABASE y DROP DATABASE)
        - Creación, borrado y modificación de estructuras de tablas (CREATE TABLE, DROP TABLE, ALTER TABLE)
        - Insertar registros (INSERT ...), modificarlos (UPDATE …), borrarlos,...
        - Consulta de registros de una o varias tablas (SELECT…)     */


      /////////////Mostrar los resultados de una consulta///////////

      $nfilas = mysqli_num_rows ($resulconsulta);
        //si hay más de 0 filas, imprímeme la siguiente tabla:
        if ($nfilas > 0) {
            //ABRO ETIQUETA TABLE
            print "<TABLE border='1'>";
            print "<TR>";
              print "<TH>Codigo Cliente</TH>";
              print "<TH>Cliente</TH>";
              print "<TH>Contacto</TH>";
              print "<TH>Telefono</TH>";
            print "</TR>";
        }
        //ahora metemos cada resultado en su sitio:
        for ($i=0; $i<$nfilas; $i++)  {
          $resultado = mysqli_fetch_array($resulconsulta);
          print ("<TR>");
            print ("<TD>" . $resultado['CodigoCliente'] . "</TD>");
            print ("<TD>" . $resultado['NombreCliente'] . "</TD>");
            print ("<TD>" . $resultado['NombreContacto'] . "</TD>");
            print ("<TD>" . $resultado['Telefono'] . "</TD>");
          print ("</TR>");
          }
        //CIERRO ETIQUETA TABLE cuando termino de llenar con datos
        print("</TABLE>\n");

      ////////////////////Me acuerdo de cerrar la conexión//////////////
      mysqli_close($conexion);


    ?>

</body>
</html>
