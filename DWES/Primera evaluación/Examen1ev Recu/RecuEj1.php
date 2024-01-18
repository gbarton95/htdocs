<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1 Recu</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <header><h1>TIRO VERTICAL</h1></header>
  <section>
    <nav></nav>
    <main>
      <div class="contenido tiro">
        <?php
          if($_SERVER["REQUEST_METHOD"] == "POST"){ //si se ha enviado el formulario
            //declaro aquí los datos que me ha dado el usuario:
            $AI = $_POST['alturaInicial'];
            $VI = $_POST['velocidadInicial'];
            //Tiempo que tarda en alcanzar altura máxima
            $TAM = TiempoAlturamax($VI);
            //Altura máxima que alcanza
            $AltMax = AlturaMax($TAM, $VI, $AI);
            //Tiempo Bajada
            $TB = TiempoBajada($AltMax);
            //Velocidad que alcanza al llegar al suelo
            $VelocidadFinal = velocidad($TB);
            //Tiempo total en el aire
            $TT = TiempoTotal($TAM, $TB);

            echo '<div class="result">';

            if($VI == 0){
            echo '<p>Se ha seleccionado una velocidad inicial nula y una altura de ' . $AI . ' metros desde la que se deja caer el objeto.</p>';

            echo '<p>Para un cuerpo en caída libre lanzado desde esa altura, el tiempo que tarda el objeto en chocar con el suelo es de ' . round ($TB, 2) . ' segundos y lo hará con una velocidad de ' . round($VelocidadFinal, 2) . ' m/s.</p>';
            } else {

            echo '<p>Se ha seleccionado una velocidad inicial de lanzamiento de  ' . $VI . ' m/s hacia arriba y una altura inicial de ' . $AI . ' metros.</p>';

            echo '<p>Un cuerpo lanzado verticalmente hacia arriba con dicha velocidad tarda ' . round ($TAM, 2) . ' segundos en alcanzar la altura máxima, que será de ' . round($AltMax, 2) . ' metros.</p>';

            echo '<p>El tiempo total desde el lanzamiento hasta que choca con el suelo es de ' . round ($TT, 2) . ' segundos y lo hará con una velocidad final de ' . round($VelocidadFinal, 2) . ' m/s.</p>';

            }

            echo '<p><a href="RecuEj1.php">Introducir nuevos datos</a></p></div>';


          } else { //si no se ha enviado el formulario, hago petición al usuario
            print
            ' <form action="RecuEj1.php" method="POST">
              <p>Introduce una velocidad inicial de lanzamiento: </p>
              <input type="number" name="velocidadInicial" min="0" required>
              <p>Introduce la altura desde donde se produce el lanzamiento: </p>
              <input type="number" name="alturaInicial" min="0" required>
              <br><br><input type="submit" value="Calcular">
              </form>
              <img src="caida_libre.gif" alt="animación de tiro vertical" />
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
  function TiempoAlturamax($velocInicial){
    $tiempohastaarriba = $velocInicial/9.8;
    return $tiempohastaarriba;
  }

  function AlturaMax($TAM, $velocInicial, $alturaInicial){
    $alturamax=$alturaInicial+$velocInicial*$TAM-(1/2*9.8*($TAM**2));
    return $alturamax;
  }

  function TiempoBajada($alturamax){
    $tiempoostion = sqrt((2*$alturamax/9.8));
    return $tiempoostion;
  }

  function TiempoTotal($TAM, $TB){
    $TT=$TAM+$TB;
    return $TT;
  }

  function velocidad($TB){
    $veloz=9.8*$TB;
    return $veloz;
  }
?>