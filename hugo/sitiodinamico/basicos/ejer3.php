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
					$cambioDolar=$_GET['cambioDolar'];
					$cambioLibra=$_GET['cambioLibra'];
					$fecha=date("d-m-y");
					echo "<h1 id='centrado'>CAMBIO DE DIVISAS A FECHA $fecha</h1>";
					echo "<table>";
					echo "<tr>
							<th>Euros</th>
							<th>Dolares</th>
							<th>Libras</th>
						</tr>";
					for ($euro=1; $euro<=10 ; $euro++)
					{
						if ($euro%2==0)
							echo "<tr class='par'>";
						else
							echo "<tr class='impar'>";
						echo "<td>$euro</td>";
						echo "<td>", $euro*$cambioDolar,"</td>";
						echo "<td>", $euro*$cambioLibra,"</td>";
						echo "</tr>";
					}
					echo "</table>";
				?>
        <br><a href="ejer3basic.php">Volver a pedir nueva conversión</a>
        </div>
    </main>
  </section>
  <?php include('../includes/footer2.php'); ?>
</body>
</html>