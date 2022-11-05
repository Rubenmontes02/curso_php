<?php

// Generar funcion
function imprimirNombre($nombre,$apellido=""){

    echo "Hola ".$nombre." ".$apellido."<br/>";
}


// LLamamos a la funcion pasandole el parámetro deseado
imprimirNombre("Juan Pablo", "Montoya");
imprimirNombre("Roberto", "Merhi");
imprimirNombre("Ruben", "Montes");
imprimirNombre("Pedro");



?>