<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location:login1.php");
        die();
    }
    $colorFondo=($_SESSION['perfil']=="Admin") ? "red" : "gray";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="<?php echo $colorFondo ?>">
    <h3><center>Portal del Usuario</center></h3>
    <br>
    <b>Usuario: </b><i><?php echo $_SESSION['email']; ?></i><br>
    <p>
        Datos super privados del sitio, solo lo veras si estas logeado.
    </p>
    <?php
        if($_SESSION['perfil']=='Admin'){
            echo "<a href='admin.php'>Ir a Administración</a>&nbsp;&nbsp;";
        }
    ?>
    <a href="cerrar.php">Cerrar Sesión</a>
</body>
</html>