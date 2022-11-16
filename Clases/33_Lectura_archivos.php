<?php

// Seleccionamos la ruta del txt
$archivo = "Contenido.txt";

// Abrimos el archivo y le damos permisos de lectura
$archivoAbierto = fopen($archivo, "r");

// Leemos el archivo y le damos la longitud del archivo
$contenido = fread($archivoAbierto, filesize($archivo));

// Mostramos el contenido de archivos
echo $contenido;
?>