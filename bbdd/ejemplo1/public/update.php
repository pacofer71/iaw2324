<?php
    session_start();
    function pintarErrores($nombre){
        if(isset($_SESSION[$nombre])){
            echo "<p style='color:red; text-size:smaller'>{$_SESSION[$nombre]}</p>";
            unset($_SESSION[$nombre]);
        }
    }

    if(!isset($_GET['id'])){
        header("Location:datos.php");
        die();
    }
    $idUser=(int)$_GET['id'];
    if($idUser==0){
        header("Location:datos.php");
        die();
    }
    require_once __DIR__."/../basedatos/conexion.php";
    $q="select * from usuarios where id=?"; //id, email, descripcion, passs
    $stmt=mysqli_prepare($llave, $q);
    mysqli_stmt_bind_param($stmt, 'i', $idUser);
    //ahora queremos guardar esta fila
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id, $email, $descripcion, $pass);
    mysqli_stmt_fetch($stmt);
    //Ahora vemos si nos han mandado el form y lo procesamos
    if(isset($_POST['btn'])){
        $email=htmlspecialchars(trim($_POST['email']));
        $descripcion=htmlspecialchars(trim($_POST['descripcion']));
        $pass=htmlspecialchars(trim($_POST['pass']));

        $errores=false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores=true;
            $_SESSION['Email']="*** Error el email NO es válido";
        }else{
            //el email es valido, vamos a ver si ya lo tiene otro usuario
            $q="select * from usuarios where email=? AND id != ?";
            $stmt=mysqli_stmt_init($llave);
            mysqli_stmt_prepare($stmt, $q);
            mysqli_stmt_bind_param($stmt, 'si', $email, $idUser);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt)!=0){
                $errores=true;
                $_SESSION['Email']="*** Error, el email ya está dado de alta";
            }
            mysqli_stmt_close($stmt);
        }
        if(strlen($pass)<5 || strlen($pass)>32){
            $errores=true;
            $_SESSION['Pass']="*** Error la contraseña debe tener entre 5 y 32 caracteres";
        }
        if(strlen($descripcion)<10 || strlen($descripcion)>200){
            $errores=true;
            $_SESSION['Descripcion']="*** Error la descripcion debe tener entre 10 y 200 caracteres";
        }

        if($errores){
            header("Location:update.php?id=$idUser");
            die();
        }
        //si he llegado aqui los datos son correctos procedemos a actualizar el usuario
        $q="update usuarios set email=?, pass=?, descripcion=? where id=?";
        $stmt=mysqli_stmt_init($llave); // NO uso $stmt=mysqli_prepare($llave, $q) pq ya lo use arriba
        mysqli_stmt_prepare($stmt, $q);
        mysqli_stmt_bind_param($stmt, 'sssi', $email, $pass, $descripcion, $idUser);
        mysqli_stmt_execute($stmt);
        mysqli_close($llave);
        header("Location:datos.php");

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
    <h3><center>ACTUALIZAR USUARIO</center></h3>
    <br>
    <fieldset style="width:50%; margin:auto">
    <form action="update.php?id=<?php echo $idUser ?>" method="POST">
        <label for="email">EMAIL</label><br>
        <input type="email" name="email" id="email" 
        value="<?php echo $email  ?>" /><br><br>
        <?php
        pintarErrores('Email');
        ?>
        <label for="pass">PASSWORD</label><br>
        <input type="text" name="pass" id="pass" value="<?php echo $pass; ?>" /><br><br>
        <?php
        pintarErrores('Pass');
        ?>
        <label for="descripcion">DESCRIPCION</label><br>
        <textarea name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea>
        <?php
        pintarErrores('Descripcion');
        ?>
        <br><br>
        <input type="submit" name="btn" value="UPDATE" />
    </form>
    </fieldset>

    
</body>
</html>