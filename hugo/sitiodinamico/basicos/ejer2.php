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
        <div class="contenido">
        <?php
        $cantidad = $_REQUEST['cantidad'];
        $moneda   = $_REQUEST['tipo'];
        $dolar    = 1.0563;
        $libra    = 0.8678;
        if ($moneda == 'dolar') {
            $cambio = $cantidad * $dolar;
            print "$cantidad euros equivalen a $cambio dólares estadounidenses.<br>";
        } else {
            $cambio = $cantidad * $libra;
            print "$cantidad euros equivalen a $cambio libras esterlinas.<br>";
        }
        ?>
        <br><a href="ejer2basic.php">Volver a pedir nueva conversión</a>
        </div>
    </main>
  </section>
  <?php include('../includes/footer2.php'); ?>
</body>
</html>