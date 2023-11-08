<?php
//var_dump($_POST);
//die(); //esto interrumpe la ejecucion de php
$nombre=htmlspecialchars(trim($_POST['nombre']));
$provincia=htmlspecialchars(trim($_POST['provincia']));
//$aficiones=$_POST['aficiones']; //esto no lo podemos hacer asi pq me dara un error si no seleccione ning

$aficiones=[];

if(isset($_POST['aficiones'])){
    foreach($_POST['aficiones'] as $value){
       $aficiones[]=htmlspecialchars(trim($value));
       //$aficiones[]=$value;
    }
}
$ciclo="";
if(isset($_POST['ciclo'])){
    $ciclo=htmlspecialchars(trim($_POST['ciclo']));
}
if(strlen($ciclo)==0){
    echo "No has seleccionado NINGÚN CICLO<br>";
}else{
    echo "El ciclo seleccionado ha sido: $ciclo <br>";
}

if(count($aficiones)==0){
    echo "NO seleccionaste ninguna afición";
}else{
    echo "Tus aficiones son: ";
    echo "<ol>";
    foreach($aficiones as $aficion){
        echo "<li>$aficion</li>";
    }
    echo "</ol>";
}