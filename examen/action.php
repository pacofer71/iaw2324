<?php
$nombre=htmlspecialchars(trim($_POST['nombre']));
$email=htmlspecialchars(trim($_POST['email']));

$errores=false;
if(strlen($nombre)<5){
    $errores=true;
    echo "<br>El Nombre es Inválido!!!!";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errores=true;
    echo "<br>El Email es Inválido!!!!";
}
if(!$errores){
    echo "LOS DATOS SON VALIDOS, el nombre es: $nombre y el email: $email";
}
