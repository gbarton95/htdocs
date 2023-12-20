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
            <button class="logout" onclick="unset ($_SESSION['usuario'])">Cerrar sesión</button>
			<h1>LOGIN PARA USUARIOS REGISTRADOS</h1>
            
            <?php
            if(!$_REQUEST){
                echo 
                '<form action="login.php" method="post">
                  <p>Usuario: <input type="text" name="usuario"></p>
                  <p>Contraseña: <input type="password" name="password"></p>
                  <input type="submit" value="Conectar">
                </form>';
              }else{
                include("bdconexion.php");
                
                $usuario=$_POST["usuario"];
                $pass=$_POST["password"];

                $consulta      = "SELECT * FROM usuarios WHERE nombre = '$usuario'";
                $resulconsulta = mysqli_query($conexion, $consulta);

                if(mysqli_num_rows($resulconsulta)!=1){
                    echo "<p>Usuario no registrado en la base de datos. Regístrese <a href='register.php'>aquí</a>.</p>";
                } else {
                    $consulta2      = "SELECT * FROM usuarios WHERE nombre = '$usuario' and clave = '$pass'";
                    $resulconsulta2 = mysqli_query($conexion, $consulta2);
                    
                    if(mysqli_num_rows($resulconsulta2)!=1){
                        echo "<p>Contraseña incorrecta. Vuelve a <a href='login.php'>introducir tus datos</a>.</p>";
                        
                    } else {
                        session_start();
                        $_SESSION["usuario"] = $usuario;
                        echo "<p>Bienvenido/a, " . $_SESSION["usuario"] . ". Ahora puedes navegar por los distintos ejercicios de la sección.</p>";
                    }

                   // $clave_encriptada = password_hash($pass, PASSWORD_BCRYPT); NO SE PIDE EN ESTE EJERCICIO

                   // $clave_ci = password_hash('Danko', CIFRADO);
                   // passwordverify('Danko', clave_ci) -devuelve boolean si coinciden
                }
              }
            ?>
        </main>
    </section>
    <?php include('../includes/footer2.php'); ?>
</body>
</html>