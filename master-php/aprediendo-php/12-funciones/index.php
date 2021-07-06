<?php

/*Funciones:
Una funcion es un conjunto de instrucciones agrupadas
bajo un nombre concreto y que pueden reutilizarse solamente
invocando a la funcion tantes veces como queramos
function nombredemifuncion(){
    Bloque o conjunto de ordenes
}
*/

function muestraNombres(){
    echo "Antonio <br/>";
    echo "Manuel <br/>";
    echo "Ivan <br/>";
    echo "Diego <br/>";
    echo "Alejandro <br/>";
}

muestraNombres();


function tabla($numero){
    echo "<h4>Tabla de multiplicar del numero: $numero </h4>";
    for($i=1; $i<=10; $i++){
      $operacion = $numero*$i;
      echo "$numero x $i = $operacion <br/>";
    }
}

tabla(6); 

//si queremos recibir el numero por URL con metodo GET
//Podemos utilizar una funcion predefinida isset()

// if (isset($_GET ['numero'])){
//     tabla($_GET['numero']);
// }else {
//     echo "No hay numero para sacar la tabla";
// }

echo "<br/>";

function calculadora ($num1, $num2){
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo "Suma= $suma </br>";
    echo "Resta=$resta </br>";
    echo "Multiplicacion=$multiplicacion </br>";
    echo "Division=$division </br>";
}

calculadora(5,7);

?>