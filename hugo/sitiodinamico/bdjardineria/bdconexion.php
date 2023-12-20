<?php
    $conexion = mysqli_connect ("localhost", "root", "") or die ("No se puede conectar con el servidor");
    mysqli_select_db ($conexion,"jardineria") or die ("No se puede seleccionar la base de datos");

    //por si no existiera la tabla usuarios
    $sql="CREATE TABLE IF NOT EXISTS usuarios(
              nombre varchar(50) NOT NULL,
              clave varchar(100) NOT NULL,
              PRIMARY KEY (nombre)
              ) engine=innodb;";
?>