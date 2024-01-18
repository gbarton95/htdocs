<!DOCTYPE html>
<html lang="es">
    <head>
	    <title>Ejercicio 3</title>
	    <meta charset="utf-8">
    </head>
    <body>
        <?php
        if (isset($_REQUEST["dia"]))
		{
            $dia=$_REQUEST["dia"];
            $diasSemana = array('Lunes', 'Martes', 'Caca', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

            echo "El día escogido es el " . $diasSemana[$dia-1];            
            
            echo '<a href="ejer3form.html"><br/><br/>Introducir otro número</a>';
        }
		else
		{
            echo '
            <form action="ejer3form.php" method="GET">
			Introduce un número del 1 al 7 para seleccionar un día de la semana: <input type="number" name="dia" step="1" min="1" max="7" required>
			<input type="submit" value="Enviar">
		    </form>';
        }
        ?>
    </body>
</html>
</body>
    </html>

