<?php
$provincias = [
    'Almería',
    'Cádiz',
    'Córdoba', 
    'Granada',
    'Huelva',
    'Jaén',
    'Málaga',
    'Sevilla',
    'Madrid'
];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="action3.php">
        <input type="text" name="nombre" placeholder="Tu nombre..." />
        <br>
        <br>
        <select name="provincia">
            <option>___Selecciona una provincia___</option>
            <?php
            foreach($provincias as $item){
                echo "<option>$item</option>";
            }
            ?>
        </select>
        <br><br>
        <b>Aficiones</b>
        <br>
        <input type="checkbox" name="aficiones[]" value="tenis"> Tenis<br>
        <input type="checkbox" name="aficiones[]" value="ciclismo"> Ciclismo<br>
        <input type="checkbox" name="aficiones[]" value="cine"> Cine<br>
        <input type="checkbox" name="aficiones[]" value="paddle"> Paddle<br>
        <input type="checkbox" name="aficiones[]" value="natacion"> Natación<br>
        <br><br>
        <b>Ciclo que estudias este curso</b><br>
        <input type='radio' value='ASIR' name='ciclo' /> ASIR<br>
        <input type='radio' value='daw' name='ciclo' /> DAW<br>
        <input type='radio' value='dam' name='ciclo' /> DAM<br>
        <input type='radio' value='smr' name='ciclo' /> SMR<br>
            <br><br>
        <input type="submit" value="ENVIAR" />&nbsp;
        <input type="reset" value="LIMPIAR" />
    </form>
</body>

</html>