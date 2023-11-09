<?php
session_start();
if(isset($_POST['btn'])){
    $email=htmlspecialchars(trim($_POST['email']));
    $pass=htmlspecialchars(trim($_POST['password']));
    $errores=false;
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores=true;
        $_SESSION['errEmail']="*** El email no es válido.";
    }
    if(strlen($pass)<5){
        $errores=true;
        $_SESSION['errPassword']="*** El campo password debe tener más de 5 caracteres";
    }
    if($errores){
        header("Location:login1.php");
        die();
    }
    //---------------------Como todo es correcto probamos a validarnos
    require 'usuarios.php';
    foreach($usuariosValidos as $usuario){
        if($usuario[0]==$email && $usuario[1]==$pass){
            $_SESSION['email']=$email;
            $_SESSION['perfil']=$usuario[2];
            header("Location:sitio1.php");
            die();
        }
    }
    //Si he llegado aquí es pq los datos de validacion son incorrectos
    $_SESSION['errVal']="Email o password Incorectos!!!";
    header("Location:login1.php");
    die();

}else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="gray">
    <h3><center>LOGIN</center></h3>
    <?php
            if(isset($_SESSION['errVal'])){
                echo "<p style='color:red'>{$_SESSION['errVal']}</p>";
                unset($_SESSION['errVal']);
            }
        ?>
    <form action="login1.php" method="POST">
        <b>EMAIL</b><br>
        <input type="email" name="email" placeholder="Tu email..." />
        <?php
            if(isset($_SESSION['errEmail'])){
                echo "<p style='color:red;font-size:smaller'>{$_SESSION['errEmail']}</p>";
                unset($_SESSION['errEmail']);
            }
        ?>
        <br><br>
        <b>PASSWORD</b><br>
        <input type="password" name="password" placeholder="******" />
        <?php
            if(isset($_SESSION['errPassword'])){
                echo "<p style='color:red;font-size:smaller'>{$_SESSION['errPassword']}</p>";
                unset($_SESSION['errPassword']);
            }
        ?>
        <br><br>
        <input type="submit" name="btn" value="ENVIAR">&nbsp;&nbsp;
        <input type="reset" value="LIMPIAR" />
    </form>
</body>
</html>
<?php } ?>