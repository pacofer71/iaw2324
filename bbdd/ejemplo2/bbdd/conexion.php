<?php
//Nos creamos la conexion a la bbdd y la guardamos en una variable, en este caso $llave
try{
    $llave=mysqli_connect("localhost", "usuario2", "secret0", "ejemplo2");
}catch(Exception $ex){
    die("Error al conectar a la bbdd: ".$ex->getMessage());
}