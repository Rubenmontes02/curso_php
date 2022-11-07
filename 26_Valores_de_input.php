<?php

$txtNombre="";
$rgLenguaje="";
$cbphp="";
$cbhtml="";
$cbcss="";
$coches="";
$txtComentario="";


if($_POST){

    // Si hay info en este txt asignaselo, de lo contrario va a estar vacio
    // El ? significa que se asigne la variable q le sigue
    // Los : significan "de lo contrario"
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
    $cbphp= (isset($_POST['cbphp'])=="si")?"checked":"";
    $cbhtml= (isset($_POST['cbhtml'])=="si")?"checked":"";
    $cbcss= (isset($_POST['cbcss']))?"checked":"";
    $coches= (isset($_POST['coches']))?$_POST['coches']:"";
    $txtComentario= (isset($_POST['txtComentario']))?$_POST['txtComentario']:"";


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
<br>
<strong>Tu lenguaje favorito es </strong>  <?php  echo $rgLenguaje;?>
<br>
<strong>Estas aprendiendo:</strong> <?php  
if($cbphp=="checked"){echo "PHP", " ";}   
if($cbhtml=="checked"){echo "HTML", " ";}   
if($cbcss=="checked"){echo "CSS", " ";} ?>
<br>
<strong>Tu coche favorito es: </strong> <?php  echo $coches  ?>
<br>
<strong>Tu comentario fue: </strong> <?php echo $txtComentario; ?>
<br>
<!-- Cerramos el if -->
<?php }?>
<!-- Creamos el forulario -->
<form action="26_Valores_de_input.php" method="post">


<!--                            INPUT:TEXT                     -->
<br><br>
Nombre: <br>
<!-- El texto: "value="< ?php echo $txtNombre? >""   se utiliza para 
dejar marcado en la casilla de texto el nombre al darle a enviar-->
<input value="<?php echo $txtNombre?>" type="text" name="txtNombre" id="">
<br><br><br>


<!--                            INPUT:RADIO                     -->


¿Te gusta?: <br>
<!-- La etiqueta php se utiliza para dejar marcada la opcion una vez se envie el form -->
<br> php: <input type="radio" <?php echo ($rgLenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id=""><br>
<br> html: <input type="radio" <?php echo ($rgLenguaje=="html")?"checked":"";?> name="lenguaje" value="html" id=""><br>
<br> CSS: <input type="radio" <?php echo ($rgLenguaje=="css")?"checked":"";?> name="lenguaje" value="css" id=""><br><br><br>


<!--                            INPUT:CHECKBOX                     -->

Estás aprendiendo: <br>
<br> PHP: <input type="checkbox" <?php echo $cbphp; ?> name="cbphp" value="si" id="">
<br> HTM:<input type="checkbox" <?php echo $cbhtml; ?> name="cbhtml" value="si" id="">
<br> CSS: <input type="checkbox" <?php echo $cbcss; ?> name="cbcss" value="si" id="">

<br><br><br>

<!--                               SELECT OPTION                     -->

¿Qué coche te gusta?: <br>
<select name="coches" id="">
    <option value="">Ninguno</option>
    <option value="Ferrari" <?php  echo($coches=="Ferrari")?"selected":""  ?> >Ferrari</option>
    <option value="Redbull" <?php  echo($coches=="Redbull")?"selected":""  ?>>Red Bull</option>
    <option value="Mercedes" <?php  echo($coches=="Mercedes")?"selected":""  ?>>Mercedes</option>
</select>
<br><br><br>

<!--                                TEXTAREA                     -->

¿Tienes alguna duda?: <br>

<textarea name="txtComentario" id="" cols="20" rows="5">
    <?php echo $txtComentario; ?>
</textarea>




<br><br><br>
<input type="submit" value="Enviar informacion">

</form>

</body>
</html>