<?php
//Senetncia if
$edad = 45;
$entrada = false;

if ($edad >= 18 && $entrada) {
    echo "Adelante disfruta el festival";
} else {
    echo "No puedes entrar";
}

$estudiar = false;
$hora = 15;
//podremos salir si es mas tarde de las 6 pm o hemos estudiado
if ($estudiar || $hora >= 18) {
    echo "<br>Puedes salir";
} else {
    echo "<br>NO puedes salir";
}
//--------------------
echo "<hr>";
$num1 = 198;
$num2 = 498;
//-------------- 12<98 , 12=12
if ($num1 < $num2) {
    echo "$num1 < $num2";
} else {
    if ($num1 == $num2) {
        echo "$num1 = $num2";
    } else {
        echo "$num2 < $num1";
    }
}
echo "<hr>";
if ($num1 < $num2) {
    echo "$num1 < $num2";
} elseif ($num1 > $num2) {
    echo "$num2 < $num1";
} else {
    echo "$num1 = $num2";
}
//-----------------------------------------
//operador switch
echo "<hr>";
$diaSemana = 23;
switch ($diaSemana) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Dia NO válido";
}
//----------------------------------------------------------------------------------
//bucle do while(), bucle while()
//1.- Bucle do while
echo "<hr>";
$num = 120;
do {
    echo $num . ", ";
    $num++;
} while ($num <= 110);
//2.- while --------------------------------------------
echo "<hr>";
$num = 120;
while ($num <= 110) {
    echo $num . ", ";
    $num++;
}
// VAMOS A MOSTRAR LOS MULTIPLOS DE 13 DE 1 A 1000 utilizando for, while y do-while
echo "<hr>";
echo "USANDO FOR<br>";
for ($i = 13; $i <= 1000; $i += 13) {
    echo "$i, ";
}
echo "<hr>";
echo "USANDO WHILE<br>";
$i = 13;
while ($i <= 1000) {
    echo "$i, ";
    $i += 13;
}
echo "<hr>";
echo "USANDO DO-WHILE<br>   ";
$i = 13;
do {
    echo "$i, ";
    $i += 13;
} while ($i <= 1000);
echo "<hr>";
//Una empresa trabaja con los siguientes perfiles 1=>"Admin", 2=>"Normal", 3=>"Gestor", 4=>"Invitado", 
//queremos un programa que en función del perfil 1, 2, 3, 4 me muestre el nombre del perfil o si no es
//un numero de 1 a 4 perfil inválido
$perfil = 23;
switch ($perfil) {
    case 1:
        echo "Eres Administrador, enhorabuena";
        break;
    case 2:
        echo "Eres usuario Normal...";
        break;
    case 3:
        echo "Eres Gestor, enhorabuena";
        break;
    case 4:
        echo "Eres Invitado";
        break;
    default:
        echo "Perfil Inválido!!!";
}
//switch con opciones multiples
//Igual que antes pero ahora $perfil=1,2,3 Admin, Perfil 4 Gestor, perfil 5, 6 Invitado I
echo "<hr>";
echo "SWITCH multiples valores<br>";
$perfil = 90;
switch ($perfil) {
    case 1:
    case 2:
    case 3:
        echo "Eres Admin, enhorabuena";
        break;
    case 4:
        echo "Eres GESTOR";
        break;
    case 5:
    case 6:
        echo "Eres INVITADO";
        break;
    default:
        echo "Perfil Inválido!!!";
}
//--------------El switch evalua cadenas tambien
echo "<hr>";
$dia = "Sábado";   //=>1
switch ($dia) {
    case "Lunes":
        $diaNum = 1;
        break;
    case "Martes":
        $diaNum = 2;
        break;
    case "Miercoles":
        $diaNum = 3;
        break;
    case "Jueves":
        $diaNum = 4;
        break;
    case "Viernes":
        $diaNum = 5;
        break;
    case "Sábado":
    case "Sabado":
        $diaNum = 6;
        break;
    case "Domingo":
        $diaNum = 7;
        break;
    default:
        $diaNum="Error dia Inválido!!!";
}
echo "El dia es: $diaNum";

//-----------------------------------------------------------------------------------
