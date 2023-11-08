<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Bloque de codigo php 1";
        //aclarando los operadores +=, -=, *=, ++, --, ...
        $num1=56;
        echo "<br>El valor de num1=$num1";
        $num1+=4;   //$num1=$num1+4; -=,  *=, 
        echo "<br>El valor de num1=$num1";
        //---------------- ++, --
        $num2=100;
        $num2=$num2+1; //$num2++; $num2--
        // ++$num1  (pre-incremento) y $num1++ (post-incremento)
        $num1=100;
        echo "<hr>";
        echo $num1++; //100
        echo "<br>$num1"; //101
        echo "<hr>";
        $num2=100;
        echo ++$num2;
        echo "<br>$num2"; //slkdldsfj sldkfjs dlskdjf sld
        //oprador  .=
        $cad="Manolo";
        $ciudad="Almería";
       // echo $cad." Fernandez"." ciudad=$ciudad"; //Manolo Fernandez ciudad=Almeria
        $nombre="Manolo";
        //$nombre=$nombre." Fernandez Perez";
        $nombre.=" Fernandez Perez";
        echo "<br>";
        echo $nombre;

    ?>
    <hr>
   
</body>
</html>