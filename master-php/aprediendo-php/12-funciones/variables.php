<?php
/*
Variables locales son las que se definen dentro dwe una funcion y no pueden ser usadas
fuera de a funcion solo estan disponibles dentro a no sewr que hagamos un return

variables globales son las que se declaran fuerad e una funcion y estan disponibles dentro y fuera de las funciones
*/

// Variable global 
$frase="Antonio quiere haer una buena prueba";

echo $frase;

function holaMundo(){
    global $frase; //para que nos deje usar la variable dentro de la funcion 
    echo "<h1>$frase</h1>";
    $year= 2020;
    echo "<h1>$year</h1>";
    return $year;
}

echo holaMundo();

//Funciones Valiables

function BuenosDias(){
    echo "Hola Buenos dias";
}

function BuenasTardes(){
    echo " hola buenas tardes";
}

function buenasNoches(){
    echo "hola buenas noches";
}

$saludo= "Quepasa";

$miFuncion = $saludo.buenasNoches();

echo $miFuncion;
?>