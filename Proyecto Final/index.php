<?php include("cabecera.php");  ?>
<?php include("conexion.php");  ?>
<?php


$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");

?>



<div class="p-5 bd-light">
    <div class="container">
        <div class="h-100 p-5 text-white bg-primary border rounded-3">
            
            <h1 class="display-3">Bienvenid@s</h1>
            <p class="lead">Esto es un portafolio</p>
            <hr class="my-2">
            <p>Más informacion</p>

        </div>
    </div>
</div>




    

<div class="row row-cols-1 row-cols-md-3 g-4">

    <?php  foreach($proyectos as $proyecto){  ?>

        <div class="col">
            <div class="card">
            <img style="width: 10rem;" src="imagenes/<?php echo $proyecto['imagen'];?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $proyecto['nombre'];  ?></h5>
                <p class="card-text"><?php echo $proyecto['descripcion'];  ?></p>
            </div>
            </div>
        </div>

    <?php } ?>

</div>









<?php include("pie.php");  ?>

