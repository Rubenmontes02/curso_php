<?php

if($_POST){

    $txtNombre=$_POST['txtNombre'];
    $txtApellidos=$_POST['txtApellidos'];


    echo "Hola ".$txtNombre." ".$txtApellidos;
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="11_Pedir_Datos.php" method="post">
Nombre:
<input type="text" name="txtNombre" id="">
<br>
Apellidos:
<input type="text" name="txtApellidos" id="">
<br>
<input type="submit" value="Enviar">
</form>
    
</body>
</html>