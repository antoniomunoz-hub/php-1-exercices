<?php
/*
//Abrir Archivo

$archivo = fopen("fichero_texto.txt", "r"); // "r" son los permisos con los que se puede abrir el archivo
//Leer Contenido
while(!feof($archivo)){ // Recorremos el archivo completo para que lea si hay mas de una linea 
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}
$contenido=fgets($archivo);
echo $contenido;

//Escribir 

// fwrite($archivo, "Soy un texto inyectado desde PHP"); para inyectarlo necesitamos otro permiso con el cual abrir el archivo

//Cerrar archivo
fclose($archivo);
*/

// copy('fichero_texto.txt', "fichero_copiado.txt") or die ('Error De Copia'); COPIAR

// rename('fichero_copiado.txt', 'fichero_renombrado.txt'); RENOMBRAR

// unlink('archivo_renombrado.txt'); BORRAR

//Ver si un archivo existe
if(file_exists("fichero_texto.txt")){ //Para ver si existe un fichero o no 
    echo "El archivo existe";
}else{
    echo "No existe";
}


?>