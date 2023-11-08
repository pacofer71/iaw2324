<?php
$frutas=["Manzanas", "Peras", "Naranjas", "Melocotones", "Fresas"];
print_r($frutas);
echo "<br>";
var_dump($frutas);
echo "<br>";
echo $frutas[3];
echo "<br>";
$frutas[]="Platanos";
echo "<br>";
var_dump($frutas);
$frutas[5]="Aguacates";
echo "<br>";
var_dump($frutas);
$frutas[15]="Platanos";
echo "<br>";
var_dump($frutas);
$frutas[]="Papayas";
echo "<br>";
var_dump($frutas);
$frutas[7]="Kiwis";
echo "<br>";
var_dump($frutas);
$numeros=[1,2,4,5,89,-45, 67,"Almeria", 34, "Cordoba", true, 45.78];
echo "<br>";
var_dump($numeros);
echo "<br>";
echo $numeros[5];
echo "<br>";
echo "el array numeros tiene: ".count($numeros). " elementos";
$numeros[90]="Manolo";
echo "<br>";
var_dump($numeros);
echo "<br>";
//-------------------------------------
echo "<hr>";
// for($i=0; $i<count($numeros); $i++){
//     echo $numeros[$i]. "<br>";
// }

foreach($numeros as $k=>$v){
    echo "el indice $k guarda el valor $v <br>";
}
$numeros[12]="Pedro";
echo "<hr>";
foreach($numeros as $k=>$v){
    echo "el indice $k guarda el valor $v <br>";
}
//
$prueba=[
    "Andalucia"=>"Ocho provincias",
    "Extremadura"=>"Dos provincias",
    "Madrid"=>"Una Provincia",
    "MIles de provincias",
    34=>"Mas provicias",
];
echo "<hr><hr>";
var_dump($prueba);
echo "<br>";
echo $prueba["Madrid"];
$prueba[]="No se las provincias";
echo "<br>";
echo var_dump($prueba);














