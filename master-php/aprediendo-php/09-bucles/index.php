<?php

/*While estructura de control que ireta o repite la 
ejecucion tantas veces como sea necesario
en base a una condicion 

while (condicion){
    bloque de instrucciones
}
*/

$numero= 0;

while($numero <=100){
    echo "<p>$numero</p>";
    $numero++;
}

//Do While 

$contador = 1;
$edad = 18;

do{
    echo "Puedes entras a la discoteca $contador";
    $contador++;
}while($edad >= 18 && $contador <=10);

?>