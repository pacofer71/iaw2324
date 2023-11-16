<?php
if(!isset($_POST['idUser'])){
    header("Location:datos.php");
    die();
}
$id=(int)$_POST['idUser'];
if($id==0){
    header("Location:datos.php");
    die();
}
require_once __DIR__."/../basedatos/conexion.php";
$q="delete from usuarios where id=?";
$stmt=mysqli_prepare($llave, $q);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
mysqli_close($llave);
header("Location:datos.php");
