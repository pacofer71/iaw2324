<?php
//Bucle for
/*
for($i=0;$i<=10;$i+=7){
    echo "$i<br>\n"; 
}
//----------------------------------------
echo "<hr>";
for($i=10; $i>0; $i--){
    echo "$i<br>";
}
//_--------------------------------------------------
echo "<hr>";
$filas=15;
$columnas=12;
echo "\n<table border='4' align='center'>\n";
for($f=0; $f<$filas; $f++){
    echo "<tr>\n";
    for($c=0; $c<$columnas; $c++){
        echo "<td>fila=$f, col=$c</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>";
//Echo Tabla de multiplicar
$num=5;
echo "<table align='center' border='4'>";
echo "<tr>";
    echo "<td colspan='5' align='center'><b>Tabla del: $num</b></td>";
echo "</tr>";
for($i=1; $i<=10; $i++){
    echo "<tr>";
        echo "<td>$num</td>";
        echo "<td>X</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>";
        echo $num*$i;
        echo "</td>";
    echo "</tr>";
}
echo "</table>";
*/
//--------------------------TAbla de 10 columnas y las filas que sea
echo "<hr>";
$cant=150 ;
$filas=$cant/10;

$num=1;
echo "<table align='center' border='4'>";
for($f=0; $f<$filas; $f++){
    echo "<tr>";
    for($c=0; $c<10; $c++){
        echo "<td>".$num++."</td>";
    }
    echo "</tr>";
}
echo "</table>";

















