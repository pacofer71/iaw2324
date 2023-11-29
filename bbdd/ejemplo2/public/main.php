<?php
// require_once "./../bbdd/conexion.php";
require_once __DIR__."/../bbdd/conexion.php";
$q="select * from articulos order by id desc";
$articulos=mysqli_query($llave, $q);
mysqli_close($llave);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:khaki">
    <h4><center>ARTICULOS</center></h4>
    <center><a href="nuevo.php"><button>CREAR ARTICULO</button></a></center>
    <br>
    <table align="center" border='2' cellpadding='4'>
        <thead style="background-color:gray; color:white">
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PVP (€)</th>
            <th>DISPONIBLE</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php
            foreach($articulos as $item){
                $color=($item['disponible']=='SI') ? 'green' : 'red';
                // if($item['disponible']=='SI'){
                //     $color='blue';
                // }else{
                //     $color='red';
                // }
                echo <<<TXT
                <tr>
                <td>{$item['id']}</td>
                <td>{$item['nombre']}</td>
                <td>{$item['descripcion']}</td>
                <td>{$item['pvp']}</td>
                <td style='color:$color'>{$item['disponible']}</td>
                <td>
                <form action="borrar.php" method="POST">
                <a href="update.php?id={$item['id']}">Actualizar</a>&nbsp;
                <input type="hidden" name="idArt" value="{$item['id']}" />
                <button name="btn" onclick="return confirm('¿Desea borrar el artículo?')">BORRAR</button>
                </form>
                </td>
                </tr>
                TXT;
            }
            ?>

        </tbody>
    </table>
</body>
</html>