<?php
//crearemos la conexion a la bbdd ejemplo1 con el usuario "usuario"
try{
    $llave=mysqli_connect("127.0.0.1", "usuario", "secret0", "ejemplo1");
}catch(Exception $ex){
    die("Error en la conexion: ".$ex->getMessage());
}