<!DOCTYPE html>
<html lang="es">
<head>
  <title>División por 12</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <header>
    <h1>RESTO DIVISIÓN ENTRE 12</h1>
  </header>
  <section>
    <nav></nav>
    <main>
        <div>
            <?php
              //si se ha mandado ya el formulario, que aparezca esto
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $numero       = $_POST["numero"];
                  $restoentre12 = $numero % 12;
                  $numerosEnLetras = ["cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez", "once"];

                  echo "<h2>Resultado:</h2>";
                  if($numero < 12) {
                      echo "El número introducido es demasiado pequeño";
                  } else {
                      echo "El número introducido ha sido el " . $numero . " y el resto de su división por 12 es <strong>" . $numerosEnLetras[$restoentre12] . "</strong>";
                  }
              }
            ?>
        </div>
        <div>
          <form action="T9ej1.php" method="POST">
            <h2>Formulario</h2>
            <label for="numero"><strong>Escribe un número entero positivo:</strong></label><br><br>
            <input type="number" min="0" name="numero" required><br><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
          </form>
        </div>
      </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>
