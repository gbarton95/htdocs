<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <!--Las constantes son espacios en la memoria del ordenador
que almacena un valor que no podrá cambiar durante la ejecución del programa-->

    <!--Aspectos a tener en cuenta con las constantes:

    1. El nombre de las constantes ha de ir en MAYÚSCULAS
    2. NO deben llevar el símbolo $
    3. Se definen con la función 'define()'
    4. Su ámbito es global por defecto 
    5. No debe poder dividirse en partes más pequeñas (como arrays) -->


    <?php
        //defino la constante AUTOR como un string 'Juan'
        define("AUTOR", "Gabriela");
        //las constantes se concatenan fuera del string
        echo "El autor es: " . AUTOR;

        //si en el tercer valor de 'define()' ponemos TRUE,
        //entonces NO será case sensitive. De otro modo sí.

        //Hay varias constantes predefinidas en PHP. Por ejemplo:
        // __LINE__ nº línea actual en el fichero
        // __FILE__ ruta completa del fichero
        // __DIR__ Directorio del fichero
        // __CLASS__ Nombre de la clase...
    ?>

</body>
</html>