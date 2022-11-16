<?php

// Ponemos un nombre al archivo
$nombreArchivo = "Archivo.txt";

// Creamos el contenido del archivo
$contenidoArchivo = "Hola wenos dias";

// Creamos el archivo y le damos permisos de escritura
$ArchivoACrear = fopen($nombreArchivo, "w");

// Escribimos el contenido en el archivo
fwrite($ArchivoACrear, $contenidoArchivo);

// Cerramos el archivo
fclose($ArchivoACrear);


?>