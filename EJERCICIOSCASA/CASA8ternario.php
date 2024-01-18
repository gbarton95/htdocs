<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternario</title>
</head>

<body>
    <h1 align="center">USANDO CONDICIONALES</h1>
    <form method="post" name="datos_usuario" id="datos_usuario">

        <table width="15%" align="center">
            <tr>
                <td>Nombre:</td>
                <td><label for="nombre_usuario"></label>
                    <input type="text" name="nombre_usuario" id="nombre_usuario">
                </td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><label for="edad_usuario"></label>
                    <input type="text" name="edad_usuario" id="edad_usuario">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
            </tr>
        </table>

    </form>

    <?php
        // Condición ? Valor si verdadero : Valor si falso;
        if(isset($_POST["enviando"])){
            $edad=$_POST["edad_usuario"];
            /* lo que podríamos hacer con if else:

                if($edad<18){
                    echo "Eres menor de edad. No puedes entrar";
                }else{
                    echo "Eres mayor de edad. Bienvenido.";
                }        
            
            En su lugar, vamos a usar un operador ternario: */
            
            echo $edad<18 ? "Eres menor de edad, no puedes acceder" : "Eres mayor, puedes acceder";

            //Lo podríamos complicar:
            // echo $nombre=="Juan" && $edad>18 ? "Bienvenido, Juan" : "Tú no eres Juan";
        }
    ?>
</body>

</html>