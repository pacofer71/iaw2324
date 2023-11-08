<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>
        <center>HOLA</center>
    </b>
    <br>
    <?php

    echo "Hola Mundo\n";
    echo "<br>";
    echo "<b>Adios Mundo</b>\n";
    echo "<br>";
    //comentario de una linea
    echo 'Hola Mundo\n'; //este \n se pintará en codigo
    /*
     este comentario es muy grande
     ocupa varias lineas
     */
    // USo de comillas dobles y simples mezcladas
    echo "<br>";
    echo "Hola \"MANUEL\" ";
    echo "<br>";
    echo 'Hola "MANUEL"';
    echo "<br>";
    echo "Hola 'MANUEL'";
    echo "<br>";
    echo 'Hola \'MANUEL\' ';
    echo "<hr>";
    echo "<table border='2'>";
    echo "<tr>";
    echo "<td>";
    echo "Columna 1";
    echo "</td>";
    echo "<td>";
    echo "Columna 2";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    echo "<hr>";
    /* 
    Para ahorrarnos trabajo si tenemos
    que escribir mucho codogo htmll
    dentro de php lo haremosde la siguiente manera
    */
    echo <<<TXT
    <table border='4'>
    <tr>
    <td>Columna 1</td>
    <td>Columna 2</td>
    </tr>
    </table>
    TXT;
    
    













    ?>
    <br>
</body>

</html>