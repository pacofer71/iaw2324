<?php
$tipos_buenos=[
    'image/gif',
    'image/x-icon',
    'image/jpeg',
    'image/svg+xml',
    'image/tiff',
    'image/webp',
];
//var_dump($_FILES);
//vamos a emepezar a guardar el fichero
if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
    //hemos subido un fichero vamos a comprobar que es del tipo pedido
    if(!in_array($_FILES['imagen']['type'], $tipos_buenos)){
        echo "Error, el archivo subido NO es una imagen!!!";
    }else{
        $nombreImagen="./imagenes/".uniqid()."_".$_FILES['imagen']['name']; 
        //"./imagenes/1234567_imagen1.jpg";
        if(move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreImagen)){
            echo "Imagen Guardada con exito";
        }else{
            echo "NO se pudo guardar la imagen!!!!";
        }
        
    }

}else{
    echo "NO HAS SUBIDO NINGUN FICHERO!!!";
}