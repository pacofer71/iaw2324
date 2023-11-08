<?php
//mostrar con un for los numeros pares de 500 a 1000
for($i=500; $i<=1000; $i+=2){
    echo "$i, ";
}
echo "<hr>";
for($i=500; $i<=1000; $i++){
    if($i%2==0){
        echo "$i, ";
    }
}
//----- Mostrar con un while los impares de 100 a 300
echo "<hr>";
$num=101;
while($num<=300){
    echo "$num, ";
    $num+=2;
}
echo "<hr>";
$num=100;
while($num<=300){
    if($num%2!=0){
        echo "$num, ";
    }
    $num++;
}
// Multiplos de 7 entre 100 y 500 con do while
echo "<hr>";
$num=100;
do{
    if($num%7==0){
        echo "$num, ";
    }
    $num++;
}while($num<=500);
echo "<hr>";
$num=105;
do{
    echo "$num, ";
    $num+=7;
}while($num<=500);

//con un switch controlaremos el valor de la var $perfil
//1=>Admin, 2=>Usuario, 3=>"Guest", 4=>"Prohibido",
//default=>"Valor Inconrrecto"
echo "<hr>";
$perfil=1;
switch($perfil){
    case 1:
        echo "Admin";
        break;
    case 2:
        echo "Usuario";
        break;
    case 3:
        echo "Guest";
        break;
    case 4:
        echo "Prohibido";
        break;
    default:
        echo "Valor Incorrecto";
}




























