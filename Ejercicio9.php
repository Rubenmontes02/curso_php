<?php

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    /*
     && -- and
     || -- or
    */


    if($valorA != $valorB || $valorA > $valorB){
        echo $valorA." es diferente y mayor que ".$valorB;
    }



}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>

    <form action="Ejercicio9.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    <br>
    Valor B:
    <input type="text" name="valorB" id="">
    <br>
    <input type="submit" value="Calcular">


    </form>
</body>

</html>