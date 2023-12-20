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
        include('../includes/nav_bbdd.php');
        include('../includes/aside2.php');
        ?>
        <main>
            <h3 class="casa"><a href="index.php">Inicio: Ejercicios BBDD</a></h3>
			<h1>FORMULARIO DE REGISTRO EN LA BASE DE DATOS</h1>
            <?php
            if(!$_REQUEST){
                echo 
                '<form action="register.php" method="post">
                  <p>Usuario: <input type="text" name="usuario"></p>
                  <p>Contraseña: <input type="password" name="password"></p>
                  <p>Repite contraseña: <input type="password" name="password2"></p>
                  <input type="submit" value="Conectar">
                </form>';
              }else{
                include("bdconexion.php");
                
                $usuario=$_POST["usuario"];
                $pass=$_POST["password"];
                $pass2=$_POST["password2"];

                $consulta      = "SELECT * FROM usuarios WHERE nombre = '$usuario'";
                $resulconsulta = mysqli_query($conexion, $consulta);

                if(mysqli_num_rows($resulconsulta)==1){
                    echo "<p>El usuario " . $usuario . " ya está registrado en la base de datos. Puede identificarse <a href='login.php'>aquí</a>.</p>";
                } else if ($pass != $pass2) {
                    echo "<p>Los campos para la contraseña no coinciden. Vuelve a <a href='register.php'>introducir tus datos</a> en el formulario de registro.</p>";
                } else {
                    $consulta      = "INSERT INTO usuarios(nombre, clave) VALUES ('" . $usuario . "','" . $pass . "')";
                    $resulconsulta2 = mysqli_query($conexion, $consulta);

                    echo "<p>Usuario " . $usuario . " insertado con éxito. Ahora puede <a href='login.php'>identificarse</a> para visualizar los ejercicios de esta sección.</p>";
                }
               }

            ?>
            
        </main>
    </section>
    <?php include('../includes/footer2.php'); ?>
</body>
</html>