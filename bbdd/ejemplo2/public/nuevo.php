<?php
    session_start();
    function mostrarError(string $nombre){
        if(isset($_SESSION[$nombre])){
            echo "<p style='color:red; font-style:italic; font-size:smaller'>$_SESSION[$nombre]</p>";
            unset($_SESSION[$nombre]);
        }
    }
    if(isset($_POST['btn'])){
        require_once __DIR__."/../bbdd/conexion.php";

        $nombre=ucfirst(htmlspecialchars(trim($_POST['nombre'])));
        $descripcion=ucfirst(htmlspecialchars(trim($_POST['descripcion'])));
        $pvp=(float)$_POST['pvp'];
        $disponible=(isset($_POST['disponible'])) ? "SI" : "NO";

        $errores=false;
        if(strlen($nombre)<6 || strlen($nombre)>100){
            $errores=true;
            $_SESSION['Nombre']="*** Error el nombre debe tener al menos 6 caracteres y no más de 100";
        }else{
            $q="select id from articulos where nombre=?";
            $stmt=mysqli_prepare($llave, $q);
            mysqli_stmt_bind_param($stmt, 's', $nombre);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt)!=0){
                $_SESSION['Nombre']="*** Error ese nombre ya existe en nuestros registros";
                $errores=true;
            }

        }
        if(strlen($descripcion)<10 || strlen($descripcion)>250){
            $errores=true;
            $_SESSION['Descripcion']="*** Error la descripción debe tener al menos 10 caracteres y no más de 250";
        }
        if($pvp<=0 || $pvp>9999.99){
            $errores=true;
            $_SESSION['Pvp']="*** Error precio debe ser mayor que 0 y menor que 10000";
        }
        if($errores){
            header("Location:nuevo.php");
            die();
        }
        // Si llegamos aqui todo esta correcto, vamos a guardar el articulo
        
        $q="insert into articulos(nombre, descripcion, pvp, disponible) values(?,?,?,?)";
        $stmt=mysqli_prepare($llave, $q);
        mysqli_stmt_bind_param($stmt, 'ssds', $nombre, $descripcion, $pvp, $disponible);
        mysqli_stmt_execute($stmt);
        mysqli_close($llave);
        header("Location:main.php");



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
    <h4><center>CREAR ARTICULO</center></h4>
    <fieldset style="width:50%; margin:auto">
    <form action="nuevo.php" method="POST">
        <label for="nombre">NOMBRE</label><br>
        <input type="text" name="nombre" id="nombre" />
        <?php
            mostrarError('Nombre');
        ?>
        <br><br>
        <label for="descripcion">DESCRIPCION</label><br>
        <textarea name="descripcion" id="descripcion" rows='4'></textarea>
        <?php
            mostrarError('Descripcion');
        ?>
        <br><br>
        <label for="pvp">PVP (€)</label><br>
        <input type="number" name="pvp" id="pvp" step='0.01' />
        <?php
            mostrarError('Pvp');
        ?>
        <br><br>
        <label for="disponible">DISPONIBLE</label><br>
        <input type='checkbox' value='SI' name='disponible'> &nbsp; SI
        <br><br>
        <button type="submit" name='btn'>GUARDAR</button>&nbsp;&nbsp;
        <input type="reset" value="LIMPIAR" />
    </form>
    </fieldset>
</body>
</html>