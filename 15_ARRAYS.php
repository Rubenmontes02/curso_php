<?php

// Creacion de un array
$frutas=array("Manzana", "Pera", "Plátano");
print_r($frutas);
echo "<br/>";

// Cambiamos el indice de los elementos del array
$personas=array("nombre"=>"Rubén", "apellido"=>"Montes", "edad"=>"20");
print_r($personas);
echo "<br/>";

// Leemos una variable de un array
$variable=$personas["nombre"];
echo $variable;
echo "<br/>";

// Leemos una lista variable a variable
for($indice=0; $indice<3; $indice++){
    echo $frutas[$indice];
    echo "<br/>";
}

// Leemos los elementos de un array con un foreach
/*
- Seleccionamos el nombre del array
- Añades el indice (si lo quieres mostrar)
- Añades el valor (si lo quieres mostrar)

$indice = variable reservada para coger el indice 
$valor = variable reservada para coger el valor de una posicion de un array
                    (No hay que crear estas variables con anterioridad)
*/
foreach($personas as $indice=>$valor){
    echo $indice." => ".$valor."<br/>";
}




?>