<?php

$jsonContenido='[
{"nombre":"Rubén", "apellido":"Montes"},
{"nombre":"Marcos", "apellido":"García"}
]';

$resultado= json_decode($jsonContenido);

foreach($resultado as $persona){

    print_r ($persona->nombre." ".$persona->apellido."<br/>");
}
?>