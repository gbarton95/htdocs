﻿<!DOCTYPE html>
<html lang="es">
<head>
	<?php include('../includes/metadata2.php'); ?>
</head>
<body>
	<?php
        include('../includes/header2.php');
        include('../includes/menu2.php');
    ?>
    <section>
		<?php
        include('../includes/nav_bbdd.php');
        include('../includes/aside2.php');
        ?>
        <main>
			<h3 class="casa"><a href="index.php">Inicio: Ejercicios BBDD</a></h3>
         <h1>Estadística de productos por gama</h1>
			<div class="contenido">
         <?php
            // Conectar con el servidor de base de datos
            $conexion = mysqli_connect ("localhost", "jardinero", "jardinero")
               or die ("No se puede conectar con el servidor");

            // Seleccionar base de datos
            mysqli_select_db ($conexion,"jardineria")
               or die ("No se puede seleccionar la base de datos");

            // Enviar consulta
            $instruccionSQL="SELECT productos.Gama, gamasproductos.DescripcionTexto, COUNT(*) FROM productos INNER JOIN gamasproductos ON productos.Gama=gamasproductos.Gama GROUP BY productos.Gama";
            $resulconsulta = mysqli_query ($conexion,$instruccionSQL)
               or die ("Fallo en la consulta");

            // Mostrar resultados de la consulta
            $nfilas = mysqli_num_rows ($resulconsulta);
            if ($nfilas > 0)
            {
               print ("<table>");
               print ("<tr>");
               print ("<th>Gama</th>");
               print ("<th>Descripción</th>");
               print ("<th>Nº de productos</th>");
               print ("</tr>");

               for ($i=1; $i<=$nfilas; $i++)
               {
                  $unafila = mysqli_fetch_row ($resulconsulta);
                  print ("<tr>");
                  print ("<td>" . $unafila[0] . "</td>");
                  print ("<td>" . $unafila[1] . "</td>");
                  print ("<td>" . $unafila[2] . "</td>");
                  print ("</tr>");
               }
               print ("</table>");
            }
            else
               print ("No hay productos");

            // Cerrar conexión
            mysqli_close ($conexion);
         ?>
         </div>
		</main>
    </section>
    <?php include('../includes/footer2.php'); ?>
</body>
</html>