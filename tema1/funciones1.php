<?php
function pintarTabla(int $filas,int $columnas,string $mensaje="X"){ 
    echo "<table border='4' align='center'>";
    for($f=0; $f<$filas; $f++){
        echo "<tr>";
        for($c=0; $c<$columnas; $c++){
            echo "<td>$mensaje</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
}
function saludo(string $nombre="desconocido"){
    echo "Buenos dias <b>$nombre</b><br>";
}
function saludo2(string $pais="españa", string $nombre="anónimo"){
    echo "<br>Buenos dias $nombre, tu pais es: $pais";
}
//--------------------------------------
function suma(int|float $a, int|float  $b):int|float{
   return $a+$b;
}

//maximo(4,5) devuelve el mayor
//minimo (num1, num2) devolvera el menor
function maximo(int|float $a, int|float $b): int|float{
   // if($a<=$b) return $b;
   // return $a;
   return ($a<=$b) ? $b : $a;
}
function minimo(int|float $a, int|float $b): int|float{
    if($a<=$b) return $a;
    return $b;
}
//calcularRebaja($precio, $descuento %) nos calculará y devolverá el precio rebajado
//calcularRebaja(100.78, 20.5)=
function calcularRebaja(int|float $precio, int|float $descuento): int|float{
    return $precio*(1-$descuento/100);

}
echo calcularRebaja(100, 20);
//CAlcular precioMasImpuesto($precio, $impuesto en %)
function precioFinal(int|float $precio, int|float $impuesto): int|float{
    return $precio*(1+$impuesto/100);
}
$precio=15000;
$impuesto=21;
echo "<br>El precio final de $precio mas el $impuesto de IVA es: ".precioFinal($precio, $impuesto);


/*
$num1=100;
$num2=800;
echo "<br>el máximo de $num1 y $num2 es: ".maximo($num1,$num2);

echo ($num1>$num2) ? "Hola" : "Adios";


//pintarTabla(2,3);
//pintarTabla(4,4, "Tabla 2");
//pintarTabla(6,6);
//pintarTabla(6,6, "Tabla de 6x6");
//saludo("Juan Manuel");
//saludo();
//saludo2();
//saludo2("Grecia", "Lola");
//saludo2("Juan");
*/
