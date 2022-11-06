<?php
// Definimos la variable que será el servidor/base de datos en la que se conecta
$servidor="localhost";   // localhost = 127.0.0.1
// Añadimos el usuario y contraseña de la BBDD
$usuario="root";
$password="";

try{
//                                              CREAR CONEXION CON LA BBDD

// Creamos una conexion con la BBDD poniendo el servidor y el nombre de la BBDD
$conexion = new PDO("mysql:host=$servidor;dbname=curso_php", $usuario, $password);
// Creamos unos atributos a la conexion para que pueda mostrar los errores
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//                                                AÑADIR DATOS A LA BBDD

// Creamos la instruccion SQL
$sqlInsertar="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Aprendiendo a programar', 'foto2.jpg');";
// Ejecutamos la instruccion
$conexion->exec($sqlInsertar);

//                                                LEEMOS DATOS DE LA BBDD

// Creamos la instruccion SQL
$sqlLeer="SELECT * FROM `fotos`";
// Preparamos la conexion con la instruccion QSL
$sentencia=$conexion->prepare($sqlLeer);
// Ejecutamos la sentencia 
$sentencia->execute();
// Guardamos el resultado de la sentencia en una variable     (La sentencia contiene la info de la consulta)
$resultado=$sentencia->fetchAll();
// Imprimimos el resultado
// print_r($resultado);
//Imprimimos el resultado mostrando solo una parte dela sentencia
foreach($resultado as $foto){
    echo $foto['nombre']."<br/>";
}

echo "Conexion establecida";

}catch(PDOException $error){

    echo "Conexion fallida","<br/>", $error;
}


?>