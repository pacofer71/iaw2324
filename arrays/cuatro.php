<?php
//algunos metodos de arrays interesantes

$prueba=[
    "uno"=>"zacarias",
    "abc"=>"alberto",
    "zeta"=>"brasil",
    5=>"maria",
    "pedro",
    123=>"roberto"
];
//cantidad de elementos de un array count()
echo count($prueba);
//-------range
$array=range(20,40);
var_dump($array);
///in_array
$provincias=["Sevilla", "Málaga", "Valencia"];
$prov="Valencia";
if(in_array($prov, $provincias)){
    echo "$prov está en las provincias";
}else{
    echo "La $prov NO está en las provincias";
}
//-------------
$arraySuma=range(1,1000);
echo "<br>La suma de los numeros del 1 a 1000 es: ".array_sum($arraySuma);

// desordena un array shuffle
$prueba=range(1,10);


shuffle($prueba);

var_dump($prueba);
$dado=range(1,6);
shuffle($dado);
echo "<br> LA tirada del dado es: ".$dado[0];










