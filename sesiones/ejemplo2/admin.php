<?php
    session_start();
    if(!isset($_SESSION['email']) || $_SESSION['perfil']!='Admin'){
        header("Location:sitio1.php");
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
<body>
<h3><center>Portal solo para Administradores</center></h3>
    <br>
    <b>Usuario: </b><i><?php echo $_SESSION['email']; ?></i><br>
    <p>
        Datos super privados del sitio, solo lo veras si estas logeado.
    </p>
    <a href="cerrar.php">Cerrar Sesión</a>&nbsp;&nbsp;
    <a href="sitio1.php">Volcer a portal del sitio</a>
</body>
</html>