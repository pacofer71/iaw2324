<?php
$frutas=array("manzana", "Pera");
$frutas1=["manzana", "pera"];

// $comunidas=array(
//     "andalucia"=>array("almeria",),
// );

$valencia=["Alicante", "Castellon", "valencia"];
$murcia=["Murcia"];
$extremadura=["Badajoz", "Caceres"];

$comunidades=[
    "Valencia"=>$valencia,
    "Murcia"=>$murcia,
    "Extremadura"=>$extremadura
];
$prueba=[
    "uno"=>"zacarias",
    "abc"=>"alberto",
    "zeta"=>"brasil",
    5=>"maria",
    "pedro",
    123=>"roberto"
];
//Metodos de ordenacion de arrays
//1.- sort()
echo "El array prueba antes de ordenarlo con sort()";
var_dump($prueba);
sort($prueba);
echo "El array prueba despues de ordenarlo con sort()";
var_dump($prueba);
//rsort()
$prueba=[
    "uno"=>"zacarias",
    "abc"=>"alberto",
    "zeta"=>"brasil",
    5=>"maria",
    "pedro",
    123=>"roberto"
];
echo "<br>Array prueba antes de utilizar rsort";
var_dump($prueba);
echo "<br> Array prueba despues de utilizar rsort";
rsort($prueba);
var_dump($prueba);
//metodo ksort
echo "<hr>";
$prueba=[
    "uno"=>"zacarias",
    "abc"=>"alberto",
    "zeta"=>"brasil",
    5=>"maria",
    "pedro",
    123=>"roberto"
];
echo "<br>Array prueba antes de utilizar ksort";
var_dump($prueba);
echo "<br> Array prueba despues de utilizar ksort";
ksort($prueba);
var_dump($prueba);
//metodo krsort--------------------------------------------------
echo "<hr>";
$prueba=[
    "uno"=>"zacarias",
    "abc"=>"alberto",
    "zeta"=>"brasil",
    5=>"maria",
    "pedro",
    123=>"roberto"
];
echo "<br>Array prueba antes de utilizar krsort";
var_dump($prueba);
echo "<br> Array prueba despues de utilizar krsort";
krsort($prueba);
var_dump($prueba);
//metodo asort--------------------------------------------------
echo "<hr>";
$prueba=[
    "uno"=>"zacarias",
    "abc"=>"alberto",
    "zeta"=>"brasil",
    5=>"maria",
    "pedro",
    123=>"roberto"
];
echo "<br>Array prueba antes de utilizar asort";
var_dump($prueba);
echo "<br> Array prueba despues de utilizar asort";
asort($prueba);
var_dump($prueba);

//metodo arsort--------------------------------------------------
echo "<hr>";
$prueba=[
    "uno"=>"zacarias",
    "abc"=>"alberto",
    "zeta"=>"brasil",
    5=>"maria",
    "pedro",
    123=>"roberto"
];
echo "<br>Array prueba antes de utilizar arsort";
var_dump($prueba);
echo "<br> Array prueba despues de utilizar arsort";
arsort($prueba);
var_dump($prueba);