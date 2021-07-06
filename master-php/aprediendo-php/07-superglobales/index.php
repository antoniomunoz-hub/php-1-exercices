<?php 

//Variables superglobales 





//Variables de servidor

echo '<h1>';
echo $_SERVER['SERVER_ADDR']; //Direccion IP de local host
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_NAME']; //Nombre del servidor
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE']; //Nombres del software utilizado
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT']; //Nombres del navegador web
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR']; //Direccion IP del cliente
echo '</h1>';

//en la documentacion de php hay muchas mas estas son solo algunas de ellas 



?>