<?php
function suma(int|float $num1, int|float $num2, int|float $num3): int|float{
    return $num1+$num2+$num3;
}
 echo "La suma de 4,4,10 es: ".suma(4,4,10);
 echo "<hr>";
 //funcion saludo

 function saludo(string $nombre="desconocid@"){
    echo "<br> Hola $nombre";
 }
 saludo("Manolo");
 saludo();

 //calcular volumen esfera
 function calcularVolumenEsfera(int |float $radio): float{
    return (4/3)*3.141516*$radio*$radio*$radio;
 }
 echo "<hr>";
 echo "El volumen de la esfera de radio=4 es: ".calcularVolumenEsfera(4);

 //funcion devolver estado
function devolverEstado(int $edad): string{
    if($edad<0 || $edad>100){
        return "Edad Incorrecta!!!";
    }
    //si estoy aqui es pq la edad es correcta
    if($edad>=0 && $edad<=10){
        return "Niño";
    }
    if($edad>=11 && $edad<=18){
        return "Juvenil";
    }
    if($edad>=19 && $edad<=50){
        return "Adulto";
    }
    if($edad>=51 && $edad<=75){
        return "Senior";
    }
    if($edad>=76 && $edad<=100){
        return "Tercera edad";
    }

}
echo "<hr>";
echo devolverEstado(30);
echo "<br>";
echo devolverEstado(80);


