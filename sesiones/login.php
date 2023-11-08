<?php
session_start();
if (isset($_POST['btn'])) {
    //vamos a hacer el login
    $email = htmlspecialchars(trim($_POST['email']));
    $pass = htmlspecialchars(trim($_POST['password']));
    $errores = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores = true;
        $_SESSION['errEmail'] = "*** El email NO es válido";
    }
    if (strlen($pass) < 5) {
        $errores = true;
        $_SESSION['errPass'] = "*** La contraseña debe tener al menos 5 caracteres";
    }
    if ($errores) {
        //quiero volver a cargar el formulario y mostrar los errores
        header("Location:login.php");
        die();
    }
    //------------ iclude, require, include_once, require_once
    require 'usuarios.php';
    foreach ($usuariosValidos as $usuario) {
        if ($usuario[0] == $email && $usuario[1] == $pass) {
            $_SESSION["email"] = $email;
            header("Location:sitio.php");
            die();
        }
    }
    //si estoy aqui es pq la validacion ha fallado
    $_SESSION['errValidacion'] = "Usuario o contraseña incorrectos!!!";
    header("Location:login.php");
    die();
} else {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        if (isset($_SESSION['errValidacion'])) {
            echo "<p style='color:red;font-size:smaller'>{$_SESSION['errValidacion']}</p>";
            unset($_SESSION['errValidacion']);
        }
        ?>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Tu correo..." />
            <?php
            if (isset($_SESSION['errEmail'])) {
                echo "<p style='color:red;font-size:smaller'>{$_SESSION['errEmail']}</p>";
                unset($_SESSION['errEmail']);
            }
            ?>

            <br><br>
            <input type="password" name="password" placeholder="*******" />
            <?php
            if (isset($_SESSION['errPass'])) {
                echo "<p style='color:red;font-size:smaller'>{$_SESSION['errPass']}</p>";
                unset($_SESSION['errPass']);
            }
            ?>

            <br><br>
            <input type="submit" name="btn" value="LOGIN" />&nbsp;&nbsp;
            <input type="reset" />
        </form>
    </body>

    </html>
<?php } ?>