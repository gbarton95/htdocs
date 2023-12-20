<html>
  <head>
	    <title>Script de creacion y eliminación de una base de datos </title>
  </head>
<body>
<?php

#conectamos con el servidor, comprobamos la conexión
# y, en caso favorable, intentamos crear la BD
if ($conexion=mysqli_connect ("localhost","root","")){
        echo "<h2> Conexión establecida con el servidor</h2><br>";

		$sentenciaSql="CREATE DATABASE IF NOT EXISTS practicas";
		$sentenciaSql.=" CHARACTER SET utf8 COLLATE utf8_general_ci";

		#creamos la bd comprobando error
		if(mysqli_query ($conexion,$sentenciaSql)){
        echo "<h2> Base de datos practicas creada</h2><br>";
    }else{
        echo "<h2> No ha sido posible crear la base de datos practicas</h2><br>";
    }

	  #cerramos la conexión con el servidor
    if(mysqli_close($conexion)){
        echo "<h2> Conexión cerrada con exito</h2><br>";
    }else{
        echo "<h2> No se ha cerrado la conexión</h2>";
    }
}
else{
        echo "<h2> NO HA SIDO POSIBLE ESTABLECER LA CONEXIÓN CON SERVIDOR MYSQL</h2>";
}


/* PARA BORRARLA:

if ($conexion = mysqli_connect("localhost", "root", "")) {
    echo "<h2>Conexión establecida con el servidor</h2><br>";

    $sentenciaSql = "DROP DATABASE practicas";

    // No es necesario agregar el conjunto de caracteres y la colación al eliminar la tabla

    // Creamos la tabla comprobando errores
    if (mysqli_query($conexion, $sentenciaSql)) {
        echo "<h2>Base de datos borrada</h2><br>";
    } else {
        echo "<h2>No ha sido posible borrar la base de datos practicas</h2><br>";
        echo "Error: " . mysqli_error($conexion);  // Agregamos esta línea para mostrar información detallada del error
    }

    // Cerramos la conexión con el servidor
    if (mysqli_close($conexion)) {
        echo "<h2>Conexión cerrada con éxito</h2><br>";
    } else {
        echo "<h2>No se ha cerrado la conexión</h2>";
    }
} else {
    echo "<h2>NO HA SIDO POSIBLE ESTABLECER LA CONEXIÓN CON EL SERVIDOR MYSQL</h2>";
}

*/
?>
</body>
</html>


