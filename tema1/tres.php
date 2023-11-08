<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Bucles nos permiten simplificar tareas repetitivas
    //1.- Bucle for
    

    
    echo "<hr>";
    $cant=10;
    echo "<table border='4' align='center'>";
    for($i=0; $i<$cant; $i++){
        echo <<<TXT
            <tr>
                <td>Fila: $i</td>
            </tr>
        TXT;
    }
    echo "</table>";












    ?>
</body>
</html>