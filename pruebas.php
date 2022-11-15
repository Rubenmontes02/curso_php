<?php
// Initializing connection data.
$host_db = 'localhost';
$name_db = 'curso_php';
$user_db = 'root';
$pass_db = '';

try {
  // Connecting using the PDO object.
  $connection = new PDO("mysql:host=$host_db; dbname=$name_db", $user_db, $pass_db);

  // Setting the query and runnin it...
  $sql = "SELECT * FROM `fotos`";
  $result = $connection->prepare($sql);
  $result->execute();

  // Iterating over the data and printing it.
  foreach($result as $row) {
    echo $row['nombre']." -Nombre del archivo:  ".$row['ruta']."<br/>";
  }
  // Closing the connection.
  $connection = null;
}
// Catching it if something went wrong.
catch(PDOException $e) {
  echo "Error con la DB";
}


# how to execute a mysql query in php?      





?>