<?php
    session_start();
    require __DIR__."/../bbdd/provincias.php";

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
    require_once __DIR__."/../bbdd/conexion.php";
    $q="select * from usuarios where id=?"; //id, email,provincia
    $stmt=mysqli_prepare($llave, $q);
    mysqli_stmt_bind_param($stmt, 'i', $idUser);
    //ahora queremos guardar esta fila
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id, $e, $p);
    mysqli_stmt_fetch($stmt);
    //Ahora vemos si nos han mandado el form y lo procesamos
    if(isset($_POST['btn'])){
        $email=htmlspecialchars(trim($_POST['email']));
        $provincia=htmlspecialchars(trim($_POST['provincia']));

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
        if(!in_array($provincia, $provincias)){
            $errores=true;
            $_SESSION['Provincia']="*** Error seleccione una provincia válida";
        }

        if($errores){
            header("Location:update.php?id=$idUser");
            die();
        }
        //si he llegado aqui los datos son correctos procedemos a actualizar el usuario
        $q="update usuarios set email=?, provincia=? where id=?";
        $stmt=mysqli_stmt_init($llave); // NO uso $stmt=mysqli_prepare($llave, $q) pq ya lo use arriba
        mysqli_stmt_prepare($stmt, $q);
        mysqli_stmt_bind_param($stmt, 'ssi', $email, $provincia, $idUser);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
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
    <legend>Editar Usuario</legend>
    <form action="update.php?id=<?php echo $idUser ?>" method="POST">
        <label for="email">EMAIL</label><br>
        <input type="email" name="email" id="email" 
        value="<?php echo $e  ?>" /><br><br>
        <?php
        pintarErrores('Email');
        ?>
        <label for="provincia">PROVINCIA</label><br>
        <select name="provincia">
            <option>____ Seleccione una provincia ___ </option>
        <?php
        foreach($provincias as $item){
            $isSelect=($item==$p) ? "selected" : "";
            echo "<option $isSelect>$item</option>";
        }

            echo "</select>";

            pintarErrores("Provincia");
        ?>    
        <br><br>
        <input type="submit" name="btn" value="UPDATE" />
    </form>
    </fieldset>

    
</body>
</html>