<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name']; 
$tipo= $archivo['type'];

if($tipo== "image/jpg" || $tipo == "image/jpeg" || 
$tipo == "image/png" || $tipo == "image/gif"){
    if(!is_dir('images')){
        mkdir('images', 0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    header("Refresh: 5; URL=index.php"); // NOS REDIRIGE A LA PAGINA PASADO INDEX 5 SEG
    echo "<h1>Imagen Subida Correctamente</h1>";

}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>Sube una imagen con formato correcto</h1>";
}
?>