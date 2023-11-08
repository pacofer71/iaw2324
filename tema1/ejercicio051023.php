<?php
function isPrimo($numero)
{
    $cantDiv = 0;
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $cantDiv++;
            if ($cantDiv > 0) break;
        }
    }
    if($cantDiv>0){
        return false;
    }
    else{
        return true;
    }
}

function areaTriangulo($base, $altura){
    return 0.5*$base*$altura;
}

function volumenEsfera($radio){
    return (4/3)*3.1415*$radio*$radio*$radio;
}

function saludo($nombre){
    echo "<br>Buenos dias '<b>".$nombre."</b>'";
}
//-----------NUmeros primos
$num = 20;
//contar los divisores de $num;
$cantDiv = 0;
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $cantDiv++;
        if ($cantDiv > 0) break;
    }
}
//echo "$num tiene un total de <b>$cantDiv</b> de divisores";
if ($cantDiv > 0) {
    echo "$num NO es Primo";
} else {
    echo "$num SI es Primo";
}

//
echo "<hr>";
$max = 100;
for ($candidato = 2; $candidato <= $max; $candidato++) {
    $cantDiv = 0;
    for ($i = 2; $i < $candidato; $i++) {
        if ($candidato % $i == 0) {
            $cantDiv++;
            if ($cantDiv > 0) break;
        }
    }
    if ($cantDiv == 0) {
        echo "$candidato, ";
    }
}
//--------------------------------------
echo "<hr>";
$max=100;
for ($candidato = 2; $candidato <= $max; $candidato++) {
    if (isPrimo($candidato)) {
        echo "$candidato, ";
    }
}
//Area del triangulo es 0.5*base*altura
//hacer un funcion "areaTriangulo()" que dada la base y la altura de un triangulo me devuelva su area
echo "<hr>";
$base=10;
$altura=23;
$area=areaTriangulo($base, $altura);
echo "el area del triangulo de base=$base, y altura=$altura es: $area";
echo "<br>el area del triangulo de base=$base, y altura=$altura es: ". areaTriangulo($base, $altura);

//el volumen de una esfera es (4/3)*Pi*r^3   //PI=3.1415  
//hacer una funcion "volumenEsfera()" que dado el radio me calcule el volumen de una esfera
$radio=12;
echo "<br>El volumen de una esfera de radio $radio es: ".volumenEsfera($radio);

//vamos a hacer la funcion saludo($nombre) que pinte "Buenos dias 'el nombre que sea'"
saludo("Manolo");
saludo("Pedro");
$nombre="Juan Manuel";
saludo($nombre);