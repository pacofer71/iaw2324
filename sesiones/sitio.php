<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location:login.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:aquamarine">
    Hola eres el usuario: <?php echo $_SESSION['email'] ?>
    <br>
    <center>
    <a href="logout.php">Cerrar Sesión</a>
</center>
</body>
</html>