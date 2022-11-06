<?php

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $multiplicacion=$valorA*$valorB;
    $division=$valorA/$valorB;


    echo "La suma de ".$valorA." y ".$valorB." es ".$suma."<br/>";
    echo "La resta de ".$valorA." y ".$valorB." es ".$resta."<br/>";
    echo "La multiplicacion de ".$valorA." y ".$valorB." es ".$multiplicacion."<br/>";
    echo "La division de ".$valorA." y ".$valorB." es ".$division."<br/>";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>

    <form action="6_Operaciones_matematicas.php" method="post">
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