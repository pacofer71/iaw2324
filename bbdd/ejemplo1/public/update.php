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