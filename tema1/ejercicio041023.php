<?php
//tabla html de $filas y $columnas cada fila de un color alternando blanco
//y negro
// <tr style="background-color:black;">
$filas = 10;
$columnas = 10;
echo "<table border='4' align='center'>";
for ($i = 0; $i < $filas; $i++) {
    if ($i % 2 == 0) {
        echo "<tr style='background-color:black'>";
    } else {
        echo "<tr>";
    }
    for ($j = 0; $j < $columnas; $j++) {
        echo "<td>A</td>";
    }
    echo "</tr>";
}
echo "</table>";
//-----------------------------------
echo "<hr>";
$filas = 10;
$columnas = 10;
echo "<table border='4' align='center'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        if ($j % 2 == 0)
            echo "<td>A</td>";
        else
            echo "<td style='background-color:red'>A</td>";
    }
    echo "</tr>";
}
echo "</table>";
//-------------------Tablero de ajedrez
echo "<hr>";
$filas = 8;
$columnas = 8;

echo "<table border='4' align='center'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        if (($i+$j) % 2 == 0) {
            echo "<td>A</td>";
        } else {
            echo "<td style='background-color:black'>A</td>";
        }
        
    }
    echo "</tr>";
}
echo "</table>";

//-----------------
echo "<hr>";
$filas=10;
$cont=1;

echo "<table border='4' align='center'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $filas; $j++) {
       echo "<td>".$cont."</td>";
       $cont++;
    }
    echo "</tr>";
}
echo "</table>";


