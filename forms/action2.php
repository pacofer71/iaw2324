<?php
// 1.- recogemos y "saneamos" los datos del formulario
$email=htmlspecialchars(trim($_POST['email']));
$pass=htmlspecialchars(trim($_POST['password']));

//2.- Procesamos todo
$errores=false;
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errores=true;
    echo "<br> El email NO es correcto!!!!";
}
if(strlen($pass)<5){
    $errore=true;
    echo "<br> La contraseña debe conterner al menos '5' caracteres!!!!";
}
if(!$errores){
    //procedemos a la validación es este caso
    if($email=="root@email.es" && $pass=="secret0"){
        echo "Enhorabuena, validación correcta";
    }else{
        echo "Error, usuario o password incorrectos!!!!";
    } 
}