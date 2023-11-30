<?php
    require_once __DIR__."/../bbdd/conexion.php";
    $q="select * from usuarios order by id desc";
    $datos=mysqli_query($llave, $q);
    mysqli_close($llave);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><center>USUARIOS</center></h3><br>
    <center><a href="crear.php"><button>NUEVO</button></a></center><br>
    <table align="center" border='2' cellpadding='2'>
        <thead>
            <th>ID</th>
            <th>EMAIL</th>
            <th>PROVINCIA</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>
            <?php
                foreach($datos as $item){
                    echo <<<TXT
                    <tr>
                        <td>{$item['id']}</td>
                        <td>{$item['email']}</td>
                        <td>{$item['provincia']}</td>
                        <td>
                        <form action='borrar.php' method='POST'>
                        <a href='update.php?id={$item['id']}'>Update</a>
                        <input type='hidden' name='idUser' value='{$item['id']}' />
                        <button type='submit' onclick="return confirm('Borrar Usuario?')">Borrar</button>
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