<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //VAriables
        $userName="Juan Fernandez"; //camel case
        $apellidos="Gil";
        echo "El nombre es: $userName";
        echo "<br>";
        echo 'Los apellidos son: $apellidos'; //
        echo "<br>";
        echo "El simbolo del dolar es: \$dolar";
        //Tipos de variable o datos
        // cadenas -> string
        // numeros enteros -> int
        // numeros decimales -> double float
        // valores boleanos (verdadero->true o falso->false) boolean
        // arrays ->permiten guardar varios valores en una variable
        // Ejemplos
        echo "<br>";
        echo "El tipo de \$userName es: ".gettype($userName); 
        echo "<br>";
        echo "El apellidos de manolo es: ".$apellidos;
        echo "<hr>";
        echo 'nombre: '.$userName.', apellidos: '.$apellidos;
        //-------------------------------------------------------
        $edad=45;
        $isAdmin=false;
        $sueldo=1234.67;
        echo "<br>";
        echo 'El tipo de $isAdmin es: '.gettype($isAdmin);
        echo "<br>";
        echo 'El nombre es: '.$userName.' los apellidos: '.
        $apellidos. ' La edad es: '.$edad. ' y el sueldo es: '.$sueldo;
        //----------------------OPERADORES-----------------------------
        // +, -, *, /, %, ++, --, += ...
        $num1=100;
        $num2=34;
        $resultado=$num1+$num2;
        echo "<br>";
        echo "la suma de $num1+$num2=$resultado";
        //--------------------
        $resultado=$num1-$num2;
        echo "<br>";
        echo "la resta de $num1-$num2=$resultado";
        //------
        $resultado=$num1*$num2;
        echo "<br>";
        echo "la mult. de $num1 X $num2=$resultado";
        //-------------------------------
        $resultado=$num1/$num2;
        echo "<br>";
        echo "la division de $num1 y $num2=$resultado";
        //----------------------------------operador modulo %
        $num1=8;
        $num2=5;
        $mod=$num1%$num2;
        echo "<br>";
        echo "El resto de dividir $num1 y $num2 es:$mod";
        //-----------------------Operador +=
        echo "<hr>";
        $num1=10;  //quiero que num1 incremente en 5 su valor
        //$num1=$num1+5; 
        $num1+=5;

        echo '$num1 ahora vale'.$num1;
        //-----------------------Operador *=
        echo "<hr>";
        $num1=10;  //quiero que num1 valga su valor mult x 5
        //$num1=$num1*5;
        $num1*=5;

        echo '$num1 ahora vale'.$num1;
        //-----------------------Operador .=
        echo "<hr>";
        $nombreCom="Juan Andres";
        //$nombreCom=$nombreCom. " Fernandez Sanchez";
        $nombreCom.=" Fernandez Sanchez"; //$nombreCom=$nombreCom. " Fer....."
        echo $nombreCom;
        //-----------------------------------------------------
        echo "<hr>";
        $num1=34;
        $num2=34.78;
        $res=$num1+$num2;
        echo "El tipo de \$res=$res es: ".gettype($res);
        // casting de tipos-------------------------------
        echo "<hr>";
        $num1=567;
        $num2=19;
        $res=(int) ($num1/$num2);
        echo "La division=$res";
        //-------------------
        $num1=456;
        $num1=(string) $num1;
        echo "<br>".gettype($num1);
        //-------------------
        $cad="manolo";
        $cad=(int) $cad;
        echo "<br>".gettype($cad);
        echo "<br>Cadena=$cad";
        //-----------------------------------------------------
        //operador ++  // $var++   ++$var
        echo "<br>";
        $num1=34;
        //++$num1;
        //$num1=$num1+1;
        //$num1+=1;
        echo "el valor de num1=". ++$num1;
        echo "<br>$num1";












        











































    ?>
    
</body>
</html>
