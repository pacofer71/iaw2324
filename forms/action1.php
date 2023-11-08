<?php
$nombre=htmlspecialchars(trim($_GET['nombre'])); //
$pass=htmlspecialchars(trim($_GET['password']));
$email=htmlspecialchars(trim($_GET['email']));
$ciudad=$_GET['ciudad'];



// if(strlen($nombre)<3 || strlen($pass)<5 || filter_var($email, FILTER_VALIDATE_EMAIL)==false){
//     echo "El nombre debe contener al menos '3', el password al menos '5' caracteres y el email debe ser valido!!! ";
// }else{
//     echo "El nombre es: $nombre, y la contraseña es: $pass";
// }

$errores=false;
if(strlen($nombre)<3){
    $errores=true;
    echo "<br>El nombre debe tener al menos 3 caracteres";
}
if(strlen($pass)<5){
    $errores=true;
    echo "<br>El nombre debe tener al menos 5 caracteres";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errores=true;
    echo "<br>Debes escribir un email válido";
}
if($ciudad=="-1"){
    $errores=true;
    echo "<br> Debes seleccionar una ciudad!!!!!!";
}
if(!$errores){
    echo "El nombre es: $nombre, la contraseña es: $pass, el email=$email y la ciudad es: $ciudad";
}