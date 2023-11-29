<?php
    session_start();
    function pintarErrores(string $nombre){
        if(isset($_SESSION[$nombre])){
            echo "<p style='color:red; italic; font-size:smaller'>{$_SESSION[$nombre]}</p>";
            unset($_SESSION[$nombre]);
        }
    }

    if(!isset($_GET['id'])){
        header("Location:main.php");
        die();
    }
    $id=(int)$_GET['id'];
    if($id==0){
        header("Location:main.php");
        die();
    }

    require_once __DIR__."/../bbdd/conexion.php";

    $q="select * from articulos where id=?";
    $stmt=mysqli_prepare($llave, $q);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id, $nombre, $descripcion, $pvp, $disponible);
    mysqli_stmt_fetch($stmt);
    $isChecked=($disponible=="SI") ? "checked" : "";
    //Procesamos el formulario ---------------------------------------------------------
    if(isset($_POST['btn'])){
        $nombre=ucfirst(htmlspecialchars(trim($_POST['nombre'])));
        $descripcion=ucfirst(htmlspecialchars(trim($_POST['descripcion'])));
        $pvp=(float)$_POST['pvp'];
        $disponible=(isset($_POST['disponible'])) ? "SI" : "NO";

        $errores=false;
       

        if(strlen($nombre)<6 || strlen($nombre)>100){
            $errores=true;
            $_SESSION['errNombre']="*** Error el nombre no debe tener menos de 6 caracteres ni mas de 100";
        }else{
            //comprobamos que el nombre no esta duplicado
            $q="select id from articulos where nombre=? AND id!=?";
            $stmt=mysqli_stmt_init($llave);
            mysqli_stmt_prepare($stmt, $q);
            mysqli_stmt_bind_param($stmt, 'si', $nombre, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt)!=0){
                $errores=true;
                $_SESSION['errNombre']="*** Error el nombre de artículo ya existe.";
            }
            mysqli_stmt_close($stmt);
        }
        if(strlen($descripcion)<10 || strlen($descripcion)>250){
            $errores=true;
            $_SESSION['errDescripcion']="*** Error la descripción no debe tener menos de 10 caracteres ni mas de 250";
        }
        if($pvp<=0 || $pvp>9999.99){
            $errores=true;
            $_SESSION['errPvp']="*** Error el pvp no debe ser inferior a 0 ni superior a 10000";
        }

        if($errores){
            header("Location:update.php?id=$id");
            die();
        }
        //-------------------------------------------------
        //Si estamos aqui es xq no hay errores, procedemos a actualizar el articulo
        $q="update articulos set nombre=?, descripcion=?, pvp=?, disponible=? where id=?";
        $stmt=mysqli_stmt_init($llave);
        mysqli_stmt_prepare($stmt, $q);
        mysqli_stmt_bind_param($stmt, 'ssdsi', $nombre, $descripcion, $pvp, $disponible, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($llave);
        header("Location:main.php");
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
<body style="background-color:khaki">
    <h4><center>ACTUALIZAR ARTICULO</center></h4>
    <fieldset style="width:50%; margin:auto">
    <form action="update.php?id=<?php echo $id ?>" method="POST">
        <label for="nombre">NOMBRE</label><br>
        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>" />
        <?php
            pintarErrores('errNombre');
        ?>
                <br><br>
        <label for="descripcion">DESCRIPCION</label><br>
        <textarea name="descripcion" id="descripcion" rows='4'><?php echo $descripcion ?></textarea>
        <?php
            pintarErrores('errDescripcion');
        ?>        
        <br><br>
        <label for="pvp">PVP (€)</label><br>
        <input type="number" name="pvp" id="pvp" step='0.01' value="<?php echo $pvp ?>" />
        <?php
            pintarErrores('errPvp');
        ?>        
        <br><br>
        <label for="disponible">DISPONIBLE</label><br>
        <input type='checkbox' value='SI' name='disponible' <?php echo $isChecked ?> /> &nbsp; SI
        <br><br>
        <button type="submit" name='btn'>EDITAR</button>&nbsp;&nbsp;
        <input type="reset" value="LIMPIAR" />
    </form>
    </fieldset>
</body>
</html>