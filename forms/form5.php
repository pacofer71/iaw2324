<?php
    $provincias=['Madrid', 'Sevilla', 'Almería', 'Valencia', 'Malaga', 'Barcelona'];
    if(isset($_POST['btnEnviar'])){
        //hemos enviado el formulario vamos a precesarlo
        $nombre=htmlspecialchars(trim($_POST['nombre']));
        $email=htmlspecialchars(trim($_POST['email']));
        $prov=htmlspecialchars(trim($_POST['prov']));
        
        $errores=false;
        $mensaje=[];
        
        if(strlen($nombre)<3){
            $errores=true;
            $mensaje[]="El nombre debe tener al menos 3 caracteres!!!";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores=true;
            $mensaje[]="Debes introducir un email válido!!!";
        }
        if(!in_array($prov, $provincias)){
            $errores=true;
            $mensaje[]="La provincia no es válida o no has introducido ninguna!!!";
        }
        if($errores){
            echo "Los errores son: <br>";
            echo "<ol>";
            foreach($mensaje as $error){
                echo "<li>$error</li>";
            }
            echo "</ol>";
        }else{
            echo "Nombre: $nombre, Provincia: $prov, Email: $email";
        }

    }else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:gray">
<h3><center>EJEMPLO FORMULARIO</center></h3>
    <form action="form5.php" method="POST">
        <input type="text" name="nombre" placeholder="Tu nombre..." />
        <br><br>
        <input type="email" name="email" placeholder="Tu Correo..." />
        <br><br>
        <select name="prov">
            <option>___Selecciona una provincia___</option>
            <?php
                foreach($provincias as $nombre){
                    echo "<option>$nombre</option>";
                }
            ?>
        </select>
        <br><br>
        <input type="submit" name="btnEnviar" value="ENVIAR" />&nbsp;&nbsp;
        <input type="reset" value="LIMPIAR" />
    </form>
</body>
</html>
<?php } ?>