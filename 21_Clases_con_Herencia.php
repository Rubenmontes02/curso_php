<?php

class persona
{
    // Propiedades de la clase
    public $nombre;
    public $edad;

    // Acciones o métodos de la clase
    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hola soy " . $this->nombre, "<br/>";
    }
    public function asignarEdad($nuevaEdad){
        $this->edad = $nuevaEdad;
    }
}

// Creamos otra clase con las caracteristicas de la primera clase de la que hereda
class trabajador extends persona{
    public $puesto;

    public function presentacion(){
        echo "Hola soy ".$this->nombre." tengo ".$this->edad." años y soy ".$this->puesto."<br/>";
    }

}

// Creamos un nuevo trabajador
$Trabajador = new trabajador();
// Asignamos un nombre al trabajador
$Trabajador->asignarNombre("Ruben");  
// Asignamos una edad al trabajador
$Trabajador->asignarEdad(20);
// Asignamos un puesto al trabajador
$Trabajador->puesto="Programador";


// Creamos un segundo trabajador
$Trabajador2 = new trabajador();
$Trabajador2->asignarNombre("Juan Pablo");
$Trabajador2->asignarEdad(33);
$Trabajador2->puesto="Ingeniero Industrial";


echo $Trabajador->presentacion();
echo $Trabajador2->presentacion();


?>