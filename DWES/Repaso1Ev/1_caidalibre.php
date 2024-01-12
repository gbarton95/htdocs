<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caida libre</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <header><h1>CAIDA LIBRE</h1></header>
  <section>
    <nav></nav>
    <main>
      <div class="contenido">
        <?php
          if($_SERVER["REQUEST_METHOD"] == "POST"){ //si se ha enviado el formulario
            //declaro aquí los datos que me ha dado el usuario:
            $altura = $_POST['n'];
            $tiempo = tiempo($altura);

            echo '<p>Ha seleccionado una altura de ' . $altura . ' metros.</p>';
            echo '<p>Los datos de velocidad y altura en cada instante de tiempo son los siguientes:</p>';

            /////////////////////////TABLA///////////////////////
            //imprimo fila de tiempo
            echo '<table><tr><th>Tiempo (s)</th>';
              for($t=0; $t<=$tiempo; $t++){
                echo '<td>' . $t . '</td>';
              }
            echo '<td>'.round($tiempo,1).'</td></tr>';
            //imprimo fila de velocidad
            echo '<tr><th>Velocidad (m/s)</th>';
              for($t=0; $t<=$tiempo; $t++){
                echo '<td>' . velocidad($t) . '</td>';
              }
            echo '<td>'.round(velocidad($tiempo),1).'</td></tr>';

            //imprimo fila de altura
            echo '<tr><th>Altura (m)</th>';
              for($t=0; $t<=$tiempo; $t++){
                echo '<td>' . round(altura($altura,$t),1) . '</td>';
              }
            echo '<td>'.round(altura($altura,$tiempo),1).'</td></tr>';
            echo '</tr></table>';
            //////////////////////FIN TABLA//////////////////////

            echo '<p><a href="1_caidalibre.php">Seleccionar otra altura</a></p>';

          } else { //si no se ha enviado el formulario, hago petición al usuario
            print
            ' <form action="1_caidalibre.php" method="POST">
              <p>Escriba una altura entre 1 y 1000 metros para calcular la caída libre de un objeto: </p>
              <input type="number" name="n" min="1" max="1000" required>
              <input type="submit" value="Calcular">
              </form>
            ';
          }
        ?>
      </div>
    </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>

<?php
  function tiempo($altinicial){
    $tiempoostion = sqrt((2*$altinicial/9.8));
    return $tiempoostion;
  }

  function velocidad($t){
    $veloz=9.8*$t;
    return $veloz;
  }

  function altura($altinicial, $t){
    $altactual = $altinicial - (1/2*9.8*($t**2));
    return $altactual; //en el momento de $t
  }
?>