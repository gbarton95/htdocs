<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables locales y globales</title>
</head>
<body>
<?php
$nombre="sin definir";
$nombre2="sin definir";

//variable LOCAL: No hay acceso de dentro afuera
  function dameNombre(){
    $nombre="Gabriela";
  }
//variable GLOBAL: Sí hay acceso
  function dameNombre2(){
    global $nombre2;
    $nombre2="Ramón";
  }

//invoco ambas funciones y hago echo, veremos cuál se imprime:
dameNombre();
echo $nombre . "<br>";
dameNombre2();
echo $nombre2;

?>
</body>
</html>