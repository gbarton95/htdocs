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
    session_start();
    include("Menu.php");

    //Hay que estructurarlo poniendo que si NO hay un REQUEST, entre en la primera página, pero que si hay un request entre en la segunda directamente.


    if(isset($_REQUEST["carta"])) {
      print '
        <img src="abriendomenu.jpg" alt="Abriendo menú">

        //HAY QUE HACER CODIGO AQUI

        <img src="cerrandomenu.jpg" alt="Cerrando menú">
      ';

    } else {

      if(isset($_REQUEST["startmenu"])) {

          //sólo queremos crear el objeto UNA vez, así que:
          if(isset($_POST['dia'])){
            $dia          = $_POST['dia'];
            $fecha        = $_POST['fecha'];
            $menu_usuario = new Menu($dia, $fecha);
            $_SESSION['datos_menu'] = serialize($menu_usuario);
          }

          //var_dump($_SESSION['datos_menu']);

          $menu_usuario = unserialize($_SESSION['datos_menu']);
          $dia=$menu_usuario->getDia();
          $fecha=$menu_usuario->getFecha();


            print '<div class="contenido"><h2>Menú del ' . $dia . ', ' . $fecha . ' </h2>';
            print '<form action="ej2MAIN.php" method="post">';
            print '<label><strong>Primeros platos</strong></label><br><input type="text" name="pp" size="50">';
            //imprimo los platos si los hay
              if(isset($POST["pp"])){
                //agrego plato
                $nuevoplato = $POST['pp'];
                $menu_usuario->agregarPrimerPlato($nuevoplato);
                //para guardarlos todos
                $_SESSION['datos_menu'] = serialize($menu_usuario);
                //te imprimo lo que hay
                $menu = unserialize($_SESSION['datos_menu']);
                $menu->getPrimerosPlatos;
              }
            print '<input type="submit" value="Añadir" name="pp"><br>';
            print '<label><strong>Segundos platos</strong></label><br><input type="text" name="sp" size="50"><input type="submit" value="Añadir" name="sp"><br>';
            print '<label><strong>Postres</strong></label><br><input type="text" name="ps" size="50"><input type="submit" value="Añadir" name="ps"><br>';
            print '<input type="submit" value="Confeccionar carta" name="carta">';
            print '</form><div>';


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

    }

  ?>
    </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>



