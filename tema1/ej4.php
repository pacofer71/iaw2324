<?php
function mostrarGatosEnvio($gastos){
    echo "<br>Los gastos de envios serán: $gastos €";
}

$total_compra=50;
$tipo_compra="ropa";

if($total_compra<19){
    switch($tipo_compra){
        case "mascota":
            echo "NO SE PUEDE REALIZAR EL ENVIO";
            break;
        case "ropa":
            $precio_envio=9;
            mostrarGatosEnvio($precio_envio);
            break;
    }
}
if($total_compra>=19 && $total_compra<40){
    $precio_envio=9;
    mostrarGatosEnvio($precio_envio);
}
if($total_compra>=40){
    $precio_envio=0;
    if($total_compra>=200){
        echo "Tu código descuento es: <b>CODIGODESC33</b>";
    }
    mostrarGatosEnvio($precio_envio);
}
