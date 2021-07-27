<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="procesar_formulario.php" method="POST" enctype="multipart/data">
        <label for="nombre">Nombre</label><br/>
        <input type="text" name="nombre" require="required" pattern="[A-Za-Z]+"><br/> 
<!-- con pattern solo nos deja meter letras de a - z -->
        <label for="apellidos" name="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" require="required" pattern="[A-Za-Z]+"><br/>

        <label for="edad">Edad</label><br/>
        <input type="number" name="edad"require="required" pattern="[0-9]+"><br/>

        <label for="email">Email</label><br>
        <input type="email" name="email" require><br/>

        <label for="pass">Password</label><br>
        <input type="password" name="pass" require="required"><br/>

        <input type="submit" value="Enviar">


    </form>

    
</body>
</html>