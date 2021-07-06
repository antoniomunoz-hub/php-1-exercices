<?php
// una variable es un contenedor de infortmacion en la cual puedo guardar un dato dentro de ella 

$primera_variable = "He creado mi primera variable";
$edad = 31;
$verdadero= true;

//El contenido de las variables se sustituye es decir va leyendo de arriba abajo y coge el valor de la ultima variable guardada
//conforme vayas imprimiendo por pantalla va cogiendo e ultimo definido 
//si despues de este echo determinas otro valor en cuanto vuelvas a llamarla cogera el ultimo definido

echo '<h1>'.$primera_variable. '</h1>';
echo $edad;
?>