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
        include('../includes/nav_arrays.php');
        include('../includes/aside2.php');
        ?>
        <main>
			<h3 class="casa"><a href="index.php">Inicio: Arrays</a></h3>
            <h1>ARRAYS NUMÉRICOS</h1>
			<div class="contenido">
            <h2>Implementación de funciones de arrays</h2>
            <?php
            function generarArrayAleatorio($length, $min, $max)
            {
                for ($i = 0; $i < $length; $i++) {
                    $array[] = rand($min, $max);
                }
                return $array;
            }

            function eliminarRepetidos($array)
            {
                return array_unique($array);
            }

            function calcularMedia($array)
            {
                return array_sum($array) / count($array);
            }

            $randomArray = generarArrayAleatorio(50, 1, 100);
            $uniqueArray = eliminarRepetidos($randomArray);
            $average = calcularMedia($uniqueArray);

            print "<br>Array aleatorio: " . implode(", ", $randomArray) . "<br>";
            print "<br>Array sin duplicados: " . implode(", ", $uniqueArray) . "<br>";
            print "<br>Media de los números:".round($average,2)."<br>";
            ?>
			</div>
		</main>
    </section>
    <?php include('../includes/footer2.php'); ?>
</body>
</html>
