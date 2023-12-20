<!DOCTYPE html>
<html lang="es">
<head>
  <title>Desglose monedas</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <header>
    <h1>DESGLOSE MONEDAS</h1>
  </header>
  <section>
    <nav></nav>
    <main>
        <div>
            <?php
             $valores = array(500, 200, 100, 50, 20, 10, 5, 2, 1);

              //si se ha mandado ya el formulario, que aparezca esto
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $total = $_POST["total"];
                  if ($total > 0) {
                    echo "<h2>Mejor desglose para $total euros:</h2>";
                    echo "<ul>";

                    foreach ($valores as $valor) {
                      if ($total >= $valor) {
                        $billetesMonedas = floor($total / $valor);
                        $total %= $valor;
                        echo "<li>$billetesMonedas ";
                        //(condicion) ? valor_si_verdadero : valor_si_falso;
                        if($billetesMonedas==1)
                          echo ($valor >= 5) ? "billete de $valor" : "moneda de $valor";
                        else
                          echo ($valor >= 5) ? "billetes de $valor" : "monedas de $valor";
                        echo "</li>";
                      }
                    }

                    echo "</ul>";
                  } else {
                    echo "Por favor, ingresa una cantidad válida de euros.";
                  }
                }
                ?>
                <h2 style="text-align: center;">Formulario</h2>
                <form action="T9ej2.php" method="POST">
                  <label for="total"><strong>Ingresa la cantidad de euros a desglosar:</strong></label><br><br>
                  <input type="number" min="1" name="total" required><br><br>
                  <input type="submit" value="Calcular desglose">
                  <input type="reset" value="Borrar">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo '<br><a href="T9ej2.php">Volver a introducir nueva cantidad a desglosar</a>';
                }
                ?>
              </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>
