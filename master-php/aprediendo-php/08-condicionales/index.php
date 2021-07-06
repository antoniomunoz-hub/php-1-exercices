<?php
 /*
 
 //IF:
 
 if(condicion){
     instrucciones
 }else{
     otras instrucciones
 }

 //Operadores de comparacion 

 == igual
 === identico teniendo que ser mismo tipo de dato 
 != diferente
 !== no identico
 < menor que <= menor igual
 > mayor que >=mayor igual

*/

$faixa= "rossa ";

if($faixa == "rossa"){
    echo "Cinturon Morado";
}else {
    echo "No es cinturon Morado";
}

echo "<br/>";

$year = 2021;

if($year == 2021){
    echo "Estamos en el 2021";
} else {
    echo "Estas en otro año";
}

echo "<br/>";

$nombre = "Antonio Muñoz";
$academia = "LiliusBarnatt";
$edad = 31;
$master = 30;
// If anidado un if dentro de otro que si se cumple la condicion entra en otra condicion

if ($edad >= $master){
    echo "$nombre es master";
    if ($academia == "LiliusBarnatt"){
        echo " Y $nombre Entrena en $academia";
    }
} else{
    echo "$nombre es adulto";
}

echo "<br/>";

//Else if
// || = OR se cumple una de las condiciones y es verdero
// $$ = AND deben cumplirse las dos condiciones 
$dia=6;

if ($dia == 1 && $dia<6){
    echo "LUNES";
}elseif ($dia == 2 && $dia<6) {
    echo "MARTES";
}elseif ($dia == 3 && $dia<6) {
    echo "MIERCOLES";
}elseif ($dia == 4 && $dia<6) {
    echo "JUEVES";
}elseif ($dia == 5 && $dia<6) {
    echo "VIERNES";
}else {
    echo "FIN DE SEMANA";
}

echo "<br/>";

//SWITCH

switch ($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;  
    case 4:
        echo "Jueves";
        break; 
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 1:
        echo "Domingo";
        break;                 
}

//GOTO para saltar Echos pero no es muy relevcante si lo necesicamos se usa simplmente usando una "marca:"



?>