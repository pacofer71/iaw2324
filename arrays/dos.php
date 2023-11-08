<?php
$valencia=["Alicante", "Castellon", "valencia"];
$murcia=["Murcia"];
$extremadura=["Badajoz", "Caceres"];

$comunidades=[
    "Valencia"=>$valencia,
    "Murcia"=>$murcia,
    "Extremadura"=>$extremadura
];

echo "<ol>";


foreach($comunidades as $nombre=>$provincias){
    echo "<li>$nombre</li>";
    echo "<ul>";
    foreach($provincias as $v){
        echo "<li>$v</li>";
    }
    echo "</ul>";
}
echo "</ol>";

$datos=[
    "Andalucia"=>["Almeria", "Cadiz", "Córdoba", "Granada", "Huelva" ,"Jaen", "Málaga", "Sevilla"]
];

echo "<table align='center' border='4' cellpadding='8'>";
foreach($datos as $nombre=>$provincias){
    echo "<tr><th colspan='".count($provincias)."'>$nombre</th></tr>";
    echo "<tr>";
    foreach($provincias as $v){
        echo "<td>$v</td>";
    }
    echo "</tr>";
    
}
echo "</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

