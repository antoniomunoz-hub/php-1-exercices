<?php
 // Ejercicios SumArrayTest

 declare(strict_types=1);

 function sumArray(array $array): int {
     $sum=0;
     foreach($array as $element) {
         $sum += $element;
     }
     return $sum;
     //return array_sum($array);
    }

 // Ejercicio FindMAxTest

//  function findPax(array $array): int {
//     $max = 0;
//     for($index= 0 ; index <= count($array) ; index++){
//         if ($array[$index]>$array[$index + 1{
//             $max= $array[$index]
//         }])
//     }
//  }

//Ejercicio AgeAverageTest

function averanAge(array $people){
    $sum=0;
    foreach($people as $person){
        $sum += $person["age"];
    }
    
    $totalage=$sum/count($people);

    return $totalage;
}

