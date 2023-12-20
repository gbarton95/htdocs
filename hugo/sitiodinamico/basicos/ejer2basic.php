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
      <form action="ejer2.php" method="post">
        <p>
          Introduce cantidad de euros a cambiar:
          <input type="number" name="cantidad" value="0.00" step="0.01" ><br><br>
          Selecciona moneda destino:
          <select name="tipo">
            <option value="dolar">Dólar Estadounidense</option>
            <option value="libra">Libra Esterlina</option>
          </select>
        </p>
        <input type="submit" value="Enviar" name="enviar">
      </form>
    </main>
  </section>
  <?php include('../includes/footer2.php'); ?>
</body>
</html>
