<?php

// mkdir('mi_carpeta', 0777) or die ("no se puede crear la carpeta"); Para crear carpeta 

// rmdir('mi_carpeta') //Para borrar 

if($gestor =opendir('./mi_carpeta')){
    while(false !==($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..' )
        echo $archivo;
    }
}
?>