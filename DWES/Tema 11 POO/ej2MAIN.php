<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programación Orientada a Objetos</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <header><h1>RESTAURANTE</h1></header>
  <section>
    <nav></nav>
    <main>
    <?php
      if(isset($_REQUEST)) { //Si se ha enviado cualquier formulario, entramos aquí
        //No especifico 'startmenu' porque puede ser cualquiera de los submits, no sólo ese

        if(isset($_REQUEST["carta"])) {
          print '
            <img src="abriendomenu.jpg" alt="Abriendo menú">



            <img src="cerrandomenu.jpg" alt="Cerrando menú">
          ';

        } else {
          //sólo queremos crear el objeto UNA vez
          if(isset($_POST['dia'])){
            $dia          = $_POST['dia'];
            $fecha        = $_POST['fecha'];
            $menu_usuario = new Menu($dia, $fecha);
          }
            print '<div class="contenido"><h2>Menú del ' . $dia . ', ' . $fecha . ' </h2>';
            print '<form action="ej2MAIN.php" method="post">';
            print '<label><strong>Primeros platos</strong></label><br><input type="text" name="pp" size="50"><input type="submit" value="Añadir" name="pp"><br>';
            print '<label><strong>Segundos platos</strong></label><br><input type="text" name="sp" size="50"><input type="submit" value="Añadir" name="sp"><br>';
            print '<label><strong>Postres</strong></label><br><input type="text" name="ps" size="50"><input type="submit" value="Añadir" name="ps"><br>';
            print '<input type="submit" value="Confeccionar carta" name="carta">';
            print '</form><div>';
        }

      } else { //si no se ha enviado el primer formulario, hago petición al usuario
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



