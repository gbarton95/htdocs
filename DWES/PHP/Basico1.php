<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Cuestionario</title>
    <style>
    body {
      background-color: grey;
    }

    header {
      background-color: black;
      color: white;
      padding: 20px;
      text-align: center;
    }

    form {
      background-color: white;
      padding-left: 30%;
      text-align: left;
    }

    label,
    p {
      font-weight: bold;
    }

  </style>
</head>
<body>
    <header>
        <h1>Resultados Cuestionario</h1>
    </header>
    <form>
    <?php
    $nombre      = $_POST['nombre'];
    $apellidos   = $_POST['apellidos'];
    $respuesta1  = $_POST['respuesta1'];
    $respuesta2a = $_POST['respuesta2a'];
    $respuesta2b = $_POST['respuesta2b'];
    $respuesta2c = $_POST['respuesta2c'];
    $respuesta2d = $_POST['respuesta2d'];

    $respuesta1_correcta   = "a";
    $respuestas2_correctas = ["b", "d"];

    print "Bienvenido, $nombre $apellidos.<br>";

    print "Respuesta a pregunta 1: ";
    if ($respuesta1 === $respuesta1_correcta) {
        print "Correcta<br>";
    } else {
        print "Incorrecta<br>";
    }

    print "Respuesta a pregunta 2: ";
    $respuestas_seleccionadas = [$respuesta2a, $respuesta2b, $respuesta2c, $respuesta2d];
    sort($respuestas_seleccionadas);

    if ($respuestas_seleccionadas == $respuestas2_correctas) {
        print "Correctas<br>";
    } else {
        print "Incorrectas<br>";
    }

    ?>
    </form>
    <br>
    <a href="Basico1.html">Volver al formulario</a>

</body>
</html>
