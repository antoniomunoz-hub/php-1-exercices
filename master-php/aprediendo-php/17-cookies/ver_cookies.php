<?php   

 //para mostrar el valor de las cookies tengo que usar $_COOKIE, una variable superglobal, es un array asociativo

 if(isset($_COOKIE['micookie'])){
     echo "<h1>".$_COOKIE['micookie']."</h1>";
 }else {
     echo "No existe cookie"; 
    }


    if(isset($_COOKIE['unaño'])){
        echo "<h1>".$_COOKIE['unaño']."</h1>";
    }else {
        echo "No existe cookie"; 
       }

?>

<a href="borrar_cookies.php">Borrar las cookies</a>
