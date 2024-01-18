<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
        //setcookie("nombre", "valor", time()+segundos, "ruta")
        setcookie("prueba", "Esta es la información de nuestra primera cookie", time()+10);
        //Sólo necesito los dos primeros parámetros. Los dos últimos son opcionales. Si no pongo los segundos la cookie desaparece al cerrar el navegador.

        //para borrar una cookie, la setteamos en un punto anterior al que se creó (por ejemplo, en time()-1)

    ?>
</body>
</html>