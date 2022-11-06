<?php

/* 
Las variables de sesion son variables que se crean una vez abierto el navegador
y se guardan hasta que el navegador se cierre, por lo que puedes utilizarlas entre 
varios documentos php sin tener que conectarlos entre si
*/

session_start();

// Creamos y le damos un valor a las variables de sesion
$_SESSION["usuario"] = "Ruben";
$_SESSION["status"] = "Logueado";

echo "Sesion iniciada"."<br/>";

echo "Usuario: ",$_SESSION["usuario"]."<br/>"."Status: ".$_SESSION["status"];




?>