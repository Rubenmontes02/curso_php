<?php

if($_POST){

$num1=$_POST['num1'];
$num2=$_POST['num2'];

$opcion=$_POST['opcion'];

switch($opcion){

    case "Sumar": 
        $resultado=$num1+$num2;
        echo "La suma es ".$resultado;
    break;

    case "Restar": 
        $resultado=$num1-$num2;
        echo "La resta es ".$resultado;
    break;

    case "Multiplicar": 
        $resultado=$num1*$num2;
        echo "La multiplicacion es ".$resultado;
    break;

    case "Dividir": 
        $resultado=$num1/$num2;
        echo "La division es ".$resultado;
    break;
}


$numero=$_POST['numero'];

if($numero%2 == 0){
    echo "El numero es par";

}else{
    echo "El numero es impar";
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi ejercicio de calculadora</title>
</head>
<body>
    
<form action="0_Ejercicio_calculadora.php" method="post">
Introduce el primer numero:<input type="text" name="num1" id="">
<br>
Introduce el segundo numero:<input type="text" name="num2" id="">
<br>
Seleccione la operación que desea realizar:<br>
<input type="submit" name="opcion" value="Sumar">
<br>
<input type="submit" name="opcion" value="Restar">
<br>
<input type="submit" name="opcion" value="Multiplicar">
<br>
<input type="submit" name="opcion" value="Dividir">
<br>
</form>

<br><br><br><br><br><br>

<form action="0_Ejercicio_calculadora.php" method="post">

Introduce un numero:
<input type="text" name="numero" id="">
<br>
<input type="submit" value="Comprobar">

</form>


</body>
</html>