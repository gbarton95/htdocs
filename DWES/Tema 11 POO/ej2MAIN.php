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

    
    if($_SERVER["REQUEST_METHOD"] != "POST"){
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
      </div>';

    } else if(!isset($_REQUEST["carta"])){
      if(isset($_REQUEST["startmenu"])) {
          //sólo queremos crear el objeto UNA vez, así que: 
            $dia          = $_POST['dia'];
            $fecha        = $_POST['fecha'];
            $menu_usuario = new Menu($dia, $fecha);
            $_SESSION['datos_menu'] = serialize($menu_usuario);
          }

          $menu_usuario = unserialize($_SESSION['datos_menu']);
          $dia=$menu_usuario->getDia();
          $fecha=$menu_usuario->getFecha();

            print '<div class="contenido"><h2>Menú del ' . $dia . ', ' . $fecha . ' </h2>';
            print '<form action="ej2MAIN.php" method="post">';

            //PRIMEROS PLATOS
            print '<label><strong>Primeros platos</strong></label><br>';
              if(isset($_POST["b1"]) && $_POST['pp'] != ""){
                  //agrego plato
                  $nuevoplato = $_POST['pp'];
                  $menu_usuario->agregarPrimerPlato($nuevoplato);
                  //para guardarlos todos
                  $_SESSION['datos_menu'] = serialize($menu_usuario);
                }
              
              if(!empty($menu_usuario)){
                    $primplatos = $menu_usuario->getPrimerosPlatos();
                    foreach($primplatos as $plato){
                      echo $plato . "<br>";
                    }
                  }
            print '<input type="text" name="pp" size="50">';
            print '<input type="submit" value="Añadir" name="b1"><br>';

            //SEGUNDOS PLATOS
            print '<label><strong>Segundos platos</strong></label><br>';
              if(isset($_POST["b2"]) && $_POST['sp'] != ""){
                //agrego plato
                $nuevoplato = $_POST['sp'];
                $menu_usuario->agregarSegundoPlato($nuevoplato);
                //para guardarlos todos
                $_SESSION['datos_menu'] = serialize($menu_usuario);
              }
            
              if(!empty($menu_usuario)){
                  $segplatos = $menu_usuario->getSegundosPlatos();
                  foreach($segplatos as $plato){
                    echo $plato . "<br>";
                  }
                }
            print '<input type="text" name="sp" size="50">';
            print '<input type="submit" value="Añadir" name="b2"><br>';

            //POSTRES
            print '<label><strong>Postres</strong></label><br>';
              if(isset($_POST["b3"]) && $_POST['ps'] != ""){
                //agrego plato
                $nuevoplato = $_POST['ps'];
                $menu_usuario->agregarPostre($nuevoplato);
                //para guardarlos todos
                $_SESSION['datos_menu'] = serialize($menu_usuario);
              }
            
              if(!empty($menu_usuario)){
                  $postres = $menu_usuario->getPostres();
                  foreach($postres as $plato){
                    echo $plato . "<br>";
                  }
                }
            print '<input type="text" name="ps" size="50">';
            print '<input type="submit" value="Añadir" name="b3"><br>';

            print '<input type="submit" value="Confeccionar carta" name="carta">';
            print '</form><div>';

    } else {
      $menu_usuario = unserialize($_SESSION['datos_menu']);
      
          print '<img src="separador1.jpg" alt="Abriendo menú">';
          print '<h2>Menú del día</h2>';
          print '<h3 class="noMT">' . $menu_usuario->getDia() . ", " . $menu_usuario->getFecha() . '</h3>';
          print '<div class="centrado">';
              if(empty($menu_usuario)){
                echo "No hay carta confeccionada";
              } else {
                if($menu_usuario->getPrimerosPlatos()!= null){
                  print '<h3>Primeros Platos</h3>';
                  $primplatos = $menu_usuario->getPrimerosPlatos();
                  foreach($primplatos as $plato){
                    echo $plato . "<br>";
                  }
                }                
                if($menu_usuario->getSegundosPlatos()!= null){
                  print '<h3>Segundos Platos</h3>';
                  $segplatos = $menu_usuario->getSegundosPlatos();
                  foreach($segplatos as $plato){
                    echo $plato . "<br>";
                  }
                }
                if($menu_usuario->getPostres()!= null){
                  print '<h3>Postres</h3>';
                  $postres = $menu_usuario->getPostres();
                  foreach($postres as $plato){
                    echo $plato . "<br>";
                  }
                }
              }
              print '</div>';
          print '<img src="separador2.jpg" alt="Cerrando menú">';
  
    }
            
    ?>
    </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>