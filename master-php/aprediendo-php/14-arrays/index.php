<?php
// Arrays coleccion de valores o conjunto de atos bajo un unico nombre
//para acceder a valores podemos usar un indioce numnero o alfanumerico

$pelicula= "Batman";
$peliculas= array("Batman Begins", "El Caballero Oscuro", "La Leyenda Renace");

$raperos= array('Lil Wayne', 'XXX Tentation', 'Drake', 'Snoop Dog');

echo "<h1>Listado de Peliculas</h1>";

for ($i = 0; $i < count($peliculas); $i++){
    
}

foreach ($raperos as $rapero){
    echo $rapero;
}


//Para cambiar indice de array de num a alfanum ponermos $personas= array ('nombre'=>"Antonio", 'apellidos'=>"Gomez Muñoz")

//Arra multidimensional

$contactos= array (
    array(
        'nombre'=> 'Cristian',
        'apellidos'=> 'Carrion Ruiz'
    ),
    array(
        'nombre'=> 'Manuel',
        'apellidos'=> 'Sanchez Escribano'
    ),array(
        'nombre'=> 'Marta',
        'apellidos'=> 'Romero Martinez'
    )
);

echo $contactos[0]['nombre'];

foreach ($contactos as $contacto){
    echo $contacto;
}

?>