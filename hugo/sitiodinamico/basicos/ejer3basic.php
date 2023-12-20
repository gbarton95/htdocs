<!DOCTYPE html>
<html lang="es">
<head>
  <?php include('../includes/metadata2.php'); ?>
</head>

<body>
  <?php
        include('../includes/header2.php');
        include('../includes/menu2.php');
    ?>
  <section>
    <?php
        include('../includes/nav_basicos.php');
        include('../includes/aside2.php');
        ?>
    <main>
      <h3 class="casa"><a href="index.php">Inicio: Ejercicios básicos</a></h3>
      <form action="ejer3.php" method="GET">
				<p>Cambio de 1 euro a dólares estadounidenses: <input type="number" name="cambioDolar" step="0.0001" min="0" required></p>
				<p>Cambio de 1 euro a libras esterlinas: <input type="number" name="cambioLibra" step="0.0001" min="0" required></p>
				<input type="submit" value="Enviar">
			</form>
    </main>
  </section>
  <?php include('../includes/footer2.php'); ?>
</body>
</html>
