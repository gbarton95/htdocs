<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programación Orientada a Objetos</title>
</head>
<body>
  <?php
    include 'Empleado.php';

    $empleado1 = new Empleado("María", "Gómez", "Mujer", "13-04-2000", "2150", "Cajera");

    $empleado1->printInfo();

  ?>
</body>
</html>