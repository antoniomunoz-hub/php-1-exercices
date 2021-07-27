<?php
//Cookie es un fichero que se almacena en el ordenador del usuario que visita la web
// con el fin dwe recordar datos y rastrear el comportamiento del mismo en la web

//Crear cookie

// setcookie("nombre", "valor que polo puede ser texto", caducidad, ruta, dominio)


//cookie basica
setcookie("micookie", "valor de mi cookie");

//cookie con expiracion

setcookie("unaño","valor de mi cookie 365 dias", time()+(60*60*24*365));
?>

<a href="ver_cookies.php">Ver las cookies</a>