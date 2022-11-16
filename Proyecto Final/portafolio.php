<?php

session_start();
if(isset($_SESSION['usuario'])!="ruben"){

    header("location:login.php");

}


?>
<?php include("cabecera.php");  ?>
<?php include("conexion.php");  ?>
<?php
if($_POST){

    $nombre = $_POST['nombre'];

    $descripcion = $_POST['descripcion'];

    $fecha = new DateTime();

    $imagen =$fecha->getTimestamp()."_".$_FILES['archivo']['name'];

    $imagenTemporal=$_FILES['archivo']['tmp_name'];
    
    move_uploaded_file($imagenTemporal,"imagenes/".$imagen);

    $objConexion = new conexion();
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");
}

if($_GET){

    $id=$_GET['borrar'];
    $objConexion = new conexion();

    $imagen=$objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);

    $sql="DELETE FROM proyectos WHERE `proyectos`.`id` = ".$id;
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");

}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");


?>

<br>


<div class="container">
    <div class="row">
        <div class="col-md-6">
           
        <div class="card">
    <div class="card-header">
        Datos del proyecto
    </div>
    <div class="card-body">

    <form action="portafolio.php" method="post" enctype="multipart/form-data">

        Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
        <br>

        Imagen del proyecto: <input required class="form-control" type="file" name="archivo" id="">
        <br>

        Descripción del proyecto: 
        <div class="mb-3">
          <label for="" class="form-label"></label>
          <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>
        </div>
        <br>

        <button class="btn btn-primary" type="submit">Enviar proyecto</button>

    </form>

    </div>
    
</div>

        </div>
        <div class="col-md-6">
            
        <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Proyecto</th>
                <th>Imagen del Proyecto</th>
                <th>Descripcion del Proyecto</th>
                <th></th>


            </tr>
        </thead>
        <tbody>
            <?php  foreach($proyectos as $proyecto){  ?>
            <tr>
                <td><?php echo $proyecto['id'];  ?></td>
                <td><?php echo $proyecto['nombre'];  ?></td>
                <td> <img width="100" src="imagenes/<?php echo $proyecto['imagen'];?>" alt=""></td>
                <td><?php echo $proyecto['descripcion'];  ?></td>
                <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>" role="button">Eliminar</a></td>


            </tr>

            <?php } ?>
           
        </tbody>
    </table>
</div>

        </div>
        
    </div>
</div>




<?php include("pie.php");  ?>
