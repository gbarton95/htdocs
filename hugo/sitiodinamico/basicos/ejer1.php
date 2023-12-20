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
				$nombre = $_GET["nombre"];
				$apellidos = $_GET["apellidos"];
				print "<p>Bienvenido, $nombre $apellidos.</p>";
				if (isset($_GET['pregunta1']) && $_GET["pregunta1"] == "a") {
					print "<p>Respuesta a pregunta 1 correcta.</p>";
				} else {
					print "<p>Respuesta a pregunta 1 incorrecta.</p>";
				}

				if (isset($_GET['pregunta2b'], $_GET['pregunta2d']) && !isset($_GET['pregunta2a']) && !isset($_GET['pregunta2c'])) {
					print "<p>Respuesta a pregunta 2 correcta.</p>";
				} else {
					print "<p>Respuesta a pregunta 2 incorrecta.</p>";
				}
				?>
				<p><a href="ejer1basic.php"><br>Volver al cuestionario</a></p>
			</div>
		</main>
    </section>
    <?php include('../includes/footer2.php'); ?>
</body>
</html>