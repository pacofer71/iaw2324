<?php
if(!isset($_POST['idArt'])){
    header("Location:main.php");
    die();
}
$id=(int) $_POST['idArt'];
if($id==0){
    header("Location:main.php");
    die();
}
require_once __DIR__."/../bbdd/conexion.php";
$q="delete from articulos where id=?";
$stmt=mysqli_prepare($llave, $q);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
mysqli_close($llave);
header("Location:main.php");