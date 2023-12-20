
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
            <h1>Uso de funciones propias de strings</h1>
			<div class="contenido">
            <?php
                $words = ["gato", "perro", "elefante", "jirafa", "tortuga", "leon", "tigre", "loro", "canguro", "pinguino"];

                print "<br><br>Array de strings: " . implode(", ", $words) . "<br><br>";

            // Encuentra la palabra más larga
            $longestWord = "";
            foreach ($words as $word) {
                if (strlen($word) > strlen($longestWord)) {
                    $longestWord = $word;
                }
            }

            // Encuentra la palabra más corta
            $shortestWord = $words[0];
            foreach ($words as $word) {
                if (strlen($word) < strlen($shortestWord)) {
                    $shortestWord = $word;
                }
            }

            // Encuentra palabras con más de 5 letras
            $longWords = [];
            foreach ($words as $word) {
                if (strlen($word) > 5) {
                    $longWords[] = $word;
                }
            }

            // Ordena el array alfabéticamente
            sort($words);

            // Función para invertir palabras
            function inviertePalabras($array)
            {
                $invertedWords = [];
                foreach ($array as $word) {
                    $invertedWords[] = strrev($word);
                }
                return $invertedWords;
            }

            // Invierte las palabras
            $invertedArray = inviertePalabras($words);

            print "Palabra más larga: $longestWord<br><br>";
            print "Palabra más corta: $shortestWord<br><br>";
            print "Palabras con más de 5 letras: " . implode(", ", $longWords) . "<br><br>";
            print "Array ordenado alfabéticamente: " . implode(", ", $words) . "<br><br>";
            print "Palabras invertidas: " . implode(", ", $invertedArray) . "<br><br>";
            ?>
            </div>
		</main>
    </section>
    <?php include('../includes/footer2.php'); ?>
</body>
</html>