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


    if($valorA==$valorB){

        echo "El valor de A es igual que el valor de B <br/>";

        if($valorA==4){
            echo "El valor de A es 4";
        }

        if($valorA==5){
            echo "El valor de A es 5";
        }
    }else{
        echo "El valor A y el valor B no son iguales";
    }



}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if anidados</title>
</head>
<body>

    <form action="Ejercicio10.php" method="post">
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