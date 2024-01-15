<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programación Orientada a Objetos</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <?php
    //metodo para construir el menu completo
    function obtenerMenu()
    {
        return  "holo";
    }
  ?>
</head>
<body>
  <header><h1>RESTAURANTE</h1></header>
  <section>
    <nav></nav>
    <main>
    <?php
      if(isset($_REQUEST['startmenu'])) {
          //declaro aquí los datos que me ha dado el usuario:
          $dia   = $_POST['dia'];
          $fecha = $_POST['fecha'];

          echo '<div class="contenido"><h2>Menú del ' . $dia . ', ' . $fecha . ' </h2>';
          echo '<p><strong>Primeros platos</strong></p><input type="text" name="pp" size="50">';
          echo '<div>';

      } else { //si no se ha enviado el formulario, hago petición al usuario
          print '
          <div class="contenido">
            <h2>Configuración del menú del día</h2>
            <form action="ej2MAIN.php" method="POST">
              <fieldset class="menu">
                <div>
                  <label for="dia">Día de la semana:</label>
                  <label for="fecha">Fecha:</label>
                </div>
                <div>
                  <input type="text" name="dia" placeholder="Lunes, martes..." required>
                  <input type="fecha" name="fecha" placeholder="01/01/2000" required>
                  <input type="submit" name="startmenu" value="Diseñar menú">
                </div>
              </fieldset>
            </form>
          </div>
        ';
      }
    ?>
    </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>



