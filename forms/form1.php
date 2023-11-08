<!DOCTYPE html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="GET" action="action1.php">
    <input type="text" name="nombre" placeholder="Tu nombre..." required />
    <br><br>
    <input type="password" name="password" placeholder="Tu contraseña..." required />
    <br><br>
    <input type="email" name="email" placeholder="Tu email..." required />
    <br><br>
    <select name="ciudad">
        <option value="-1">__ SELECCIONA UNA CIUDAD ___</option>
        <option>Almería</option>
        <option>Granada</option>
        <option>Sevilla</option>
    </select>
    <br><br>
    <input type="submit" value="ENVIAR" />
   </form> 
</body>
</html>