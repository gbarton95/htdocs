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
      <div class="contenido">
        <h2>Configuración del menú del día</h2>
        <fieldset class="menu">
          <div>
            <label for="dia">Día de la semana:</label>
            <label for="fecha">Fecha:</label>
          </div>
          <div>
            <input type="text" name="dia" required>
            <input type="fecha" name="fecha" placeholder="01/01/2000" required>
            <input type="submit" name="startmenu" value="Diseñar menú">
          </div>
        </fieldset>
      </div>
    </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>

<?php
  if(!isset($_REQUEST['startmenu'])) {



  }
?>