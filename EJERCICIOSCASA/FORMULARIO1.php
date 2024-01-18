<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario pildorasinformaticas PHP video 9</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}
</style>
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<!--Si quisiera llamar a un PHP externo, incluiría action="nombre.php" en el form-->
<form method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>

<!--EMPIEZO MI CÓDIGO AQUÍ-->
<?php

  //isset comprueba si se accionado/completado algo
  if(isset($_POST["enviando"])){
    $usuario=$_POST["nombre_usuario"];
    $edad=$_POST["edad_usuario"];

    if($edad>=18){
      echo "Puedes entrar";
    }else{
      echo "No puedes entrar";
    }
  }

?>

</body>
</html>