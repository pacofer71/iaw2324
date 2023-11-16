<?php
    session_start();
    function pintarErrores($nombre){
        if(isset($_SESSION[$nombre])){
            echo "<p style='color:red; text-size:smaller'>{$_SESSION[$nombre]}</p>";
            unset($_SESSION[$nombre]);
        }
    }
    if(isset($_POST['btn'])){
        //procesamos el form
        $email=htmlspecialchars(trim($_POST['email']));
        $pass=htmlspecialchars(trim($_POST['pass']));
        $descripcion=htmlspecialchars(trim($_POST['descripcion']));

        $errores=false;
        require_once __DIR__."/../basedatos/conexion.php";

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores=true;
            $_SESSION['Email']="*** El email NO es válido";
        }else{
            //vamos a comprobar que el email que queremos guardar NO existe en la BBDD
            $q="select * from usuarios where email=?";
            $stmt=mysqli_prepare($llave, $q);
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt)!=0){
                $errores=true;
                $_SESSION['Email']="*** Error, el email ya está dado de alta";
            }

        }

        if(strlen($pass)<5 || strlen($pass)>32){
            $errores=true;
            $_SESSION['Pass']="*** Error el password debe tener al menos 5 caracteres y no más de 32";
        }
        if(strlen($descripcion)<10 || strlen($descripcion)>200){
            $errores=true;
            $_SESSION['Descripcion']="*** Error la descripcion tener al menos 10 caracteres y no más de 200";
        }

        if($errores){
            mysqli_close($llave); //para cerrar la conexion si he tenido errores.
            header("Location:crear.php");
            die();
        }
        //-------------------------Si estamos aqui no hay errores, guardamos los datos
        
        $q="insert into usuarios(email, pass, descripcion) values(?, ?, ?)";
        $stmt=mysqli_prepare($llave, $q);
        mysqli_stmt_bind_param($stmt, 'sss', $email, $pass, $descripcion);
        mysqli_stmt_execute($stmt);
        //CERRAR LA CONEXION
        mysqli_close($llave);
        header("Location:datos.php");
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
    <h3><center>CREAR USUARIO</center></h3>
    <br>
    <fieldset style="width:50%; margin:auto">
    <form action="crear.php" method="POST">
        <label for="email">EMAIL</label><br>
        <input type="email" name="email" id="email" /><br><br>
        <?php
        pintarErrores('Email');
        ?>
        <label for="pass">PASSWORD</label><br>
        <input type="password" name="pass" id="pass" /><br><br>
        <?php
        pintarErrores('Pass');
        ?>
        <label for="descripcion">DESCRIPCION</label><br>
        <textarea name="descripcion" id="descripcion"></textarea>
        <?php
        pintarErrores('Descripcion');
        ?>
        <br><br>
        <input type="submit" name="btn" value="GUARDAR" />
    </form>
    </fieldset>

    
</body>
</html>