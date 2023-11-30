<?php
    session_start();
    require __DIR__."/../bbdd/provincias.php";

    function pintarErrores($nombre){
        if(isset($_SESSION[$nombre])){
            echo "<p style='color:red; text-size:smaller'>{$_SESSION[$nombre]}</p>";
            unset($_SESSION[$nombre]);
        }
    }
    if(isset($_POST['btn'])){
        //procesamos el form
        $email=htmlspecialchars(trim($_POST['email']));
        $provincia=htmlspecialchars(trim($_POST['provincia']));

        $errores=false;
        require_once __DIR__."/../bbdd/conexion.php";

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

        if(!in_array($provincia,$provincias)){
            $errores=true;
            $_SESSION['Provincia']="*** Error seleccione una provincia válida";
        }

        if($errores){
            mysqli_close($llave); //para cerrar la conexion si he tenido errores.
            header("Location:crear.php");
            die();
        }
        //-------------------------Si estamos aqui no hay errores, guardamos los datos
        
        $q="insert into usuarios(email, provincia) values(?, ?)";
        $stmt=mysqli_prepare($llave, $q);
        mysqli_stmt_bind_param($stmt, 'ss', $email, $provincia);
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
    <legend>Crear Usuario</legend>
    <form action="crear.php" method="POST">
        <label for="email">EMAIL</label><br>
        <input type="email" name="email" id="email" /><br><br>
        <?php
        pintarErrores('Email');
        ?>
        <label for="provincia">PROVINCIA</label><br>
        <select name="provincia">
            <option>____ Seleccione una provincia ___ </option>
        <?php
        foreach($provincias as $provincia){
            echo "<option>$provincia</option>";
        }
            echo "</select>";
            pintarErrores("Provincia");
        ?>    
        <br><br>
        <input type="submit" name="btn" value="GUARDAR" />
    </form>
    </fieldset>

    
</body>
</html>