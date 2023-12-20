
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
			<div class="contenido">
            <h1>range, array_filter, array_map, array_reduce y arsort</h1>
            <?php
            // Genera un array con números enteros del 1 al 20 (inclusive)
            $numbers = range(1, 20);

            // Filtra los números pares
            $evenNumbers = array_filter($numbers, function ($number) {
                return $number % 2 == 0;
            });

            // Eleva al cuadrado los números pares
            $squaredNumbers = array_map(function ($number) {
                return $number ** 2;
            }, $evenNumbers);

            // Calcula la suma de los números al cuadrado
            $sumOfSquares = array_reduce($squaredNumbers, function ($carry, $number) {
                return $carry + $number;
            }, 0);

            print "<br><br>Array generado: " . implode(", ", $numbers) . "<br><br>";

            // Ordena el array de números alfabéticamente en orden ascendente
            arsort($numbers);

            print "Números pares originales: " . implode(", ", $evenNumbers) . "<br><br>";
            print "Números al cuadrado: " . implode(", ", $squaredNumbers) . "<br><br>";
            print "Suma de los números al cuadrado: $sumOfSquares<br><br>";
            print "Lista ordenada en orden descendente: " . implode(", ", $numbers) . "<br><br>";
            ?>
			</div>
		</main>
    </section>
    <?php include('../includes/footer2.php'); ?>
</body>
</html>
