<?php

session_start();

// Comprobamos que existan los datos anates de imprimirlos

// La funcion isset sirve para comprobar si una variable está vacia

if(isset($_SESSION["usuario"])){

    echo "Usuario: ",$_SESSION["usuario"]."<br/>"."Status: ".$_SESSION["status"];

}else{
echo "No hay datos";
}

?>