<?php

//For

// for (variable contador, condicion, incremento contador){
//     bloque de instucciones
// }

$result = 0;

for ($i = 0; $i <= 100; $i++){

    $result += $i;
    //si queremos que se viese cada iteraccion metemos el $result dento del bucle
}
echo $result;
?>