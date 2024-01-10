<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programación Orientada a Objetos</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <header><h1>CLASE EMPLEADO</h1></header>
  <section>
    <nav></nav>
    <main>
      <div class="contenido">
      <?php
        include 'Empleado.php';

        $empleado1 = new Empleado("María", "Gómez", "Mujer", "13-04-2000", "2150", "Cajera");
        $empleado2 = new Empleado("Pedro", "Ximénez", "Hombre", "24-11-1992", "1800", "Mozo de almacén");

        $empleado1->printInfo();
        echo "<br><br>";
        $empleado2->printInfo();

      ?>
      </div>
    </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>