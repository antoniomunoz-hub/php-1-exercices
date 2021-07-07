<?php
// sesion almacena y persiste datos del usuario mientras que navega en el sitio web hasta que cierra sesion

//Iniciar session

session_start();

//Variable local
$variable_normal= "Soy una variable normal";

//Variable de sesion

$_SESSION[ 'Variable_persistente'] = 'HOLA ESTOY ACTIVO';
echo $variable_normal;
echo $_SESSION['Variabable_persistente'];
?>