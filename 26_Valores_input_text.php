<?php

$txtNombre="";
if($_POST){

    // Si hay info en este txt asignaselo, de lo contrario va a estar vacio
    // El ? significa que se asigne la variable q le sigue
    // Los : significan "de lo contrario"
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<!-- Comprobamos si se ha recibido algo -->
<?php if($_POST){ ?>
<!-- Recibimos el dato que ha enviado el usuario -->
<strong>Hola </strong>  <?php  echo $txtNombre;?>
<!-- Cerramos el if -->
<?php }?>
<!-- Creamos el forulario -->
<form action="26_Valores_input_text.php" method="post">
<input value="<?php echo $txtNombre?>" type="text" name="txtNombre" id="">
<input type="submit" value="Enviar informacion">

</form>

</body>
</html>