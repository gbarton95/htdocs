<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2 Recu</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <header><h1>NOTAS ALUMNOS</h1></header>
  <section>
    <nav></nav>
    <main>
      <div class="contenido">
        <?php
        //datos del examen
        $alumnos = array ("Alberto", "Ana", "Beatriz", "Carlos", "Diego", "Elena", "Gema", "Héctor", "José", "Leire", "Manuel", "Marta", "Roberto", "Sandra", "Sergio", "Tomás", "Vanesa", "Víctor");
        $asignaturas = array ("Biología", "Historia", "Informática", "Lengua", "Matemáticas");
        $notas=array(array(5,4,7,6,6), array(8,7,9,8,10), array(5,7,8,5,4), array(4,8,9,8,6), array(5,6,7,7,7), array(8,8,8,9,7), array(7,5,7,6,6),  array(6,8,6,7,10), array(10,9,10,8,7), array(7,8,8,7,6), array(4,5,6,7,3), array(3,4,4,5,6), array(6,7,7,8,8), array(8,7,7,8,9), array(7,5,5,8,7), array(10,9,10,8,8),	  array(7,8,7,10,9),	   array(4,5,7,4,8));

        //inicializo la variable tabla y relleno de forma asociativa
        $tabla = array();

        foreach ($alumnos as $i => $alumno) {
            foreach ($asignaturas as $j => $asignatura) {
                $tabla[$alumno][$asignatura] = $notas[$i][$j];
            }
        }

          echo '<table><tr><th>Alumnos</th>';
          foreach ($asignaturas as $asignatura) {
              echo '<th>' . $asignatura . '</th>';
          }
          echo '</tr>';

          foreach ($alumnos as $alumno) {
              echo '<tr><th class="izq">' . $alumno . '</th>';
              foreach ($asignaturas as $asignatura) {
                  echo '<td>' . $tabla[$alumno][$asignatura] . '</td>';
              }
              echo '</tr>';
          }
          echo '</table>';
        ?>
      </div>
    </main>
    <aside></aside>
  </section>
  <footer></footer>
</body>
</html>