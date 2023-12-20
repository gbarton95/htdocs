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
            <div class="contenido">
                <h2>Zona de ejercicios con bases de datos</h2>
                <p>Aquí se pueden consultar desde el menú de navegación algunos de los ejercicios realizados en el módulo sobre programación de acceso a datos con PHP y MySQL.</p>
                <p>Esta sección tiene el acceso restringido a usuarios registrados en la base de datos, por favor <a href="login.php">identifíquese</a> o <a href="register.php">regístrese</a></p>
                <p>Hubo un intento de terminar el trabajo y restringir el acceso a usuarios registrados pero no ha podido ser por falta de tiempo :( </p>
            </div>
        </main>
    </section>
    <?php include('../includes/footer2.php'); ?>
</body>
</html>