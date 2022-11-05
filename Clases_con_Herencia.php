<?php

class persona
{
    // Propiedades de la clase
    public $nombre;
    private $edad;
    protected $altura;

    // Acciones o métodos de la clase
    public function asignarNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre()
    {
        echo "Hola soy " . $this->nombre, "<br/>";
    }
    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

// Creamos otra clase con las caracteristicas de la primera clase de la que hereda
class trabajador extends persona{
    public $puesto;

    public function presentacion(){

        echo "Hola soy ".$this->nombre." y soy ".$this->puesto;
    }

}

// Creamos un nuevo trabajador
$Trabajador = new trabajador();
// Asignamos un nombre al trabajador
$Trabajador->asignarNombre("Ruben");  
// Asignamos un puesto al trabajador
$Trabajador->puesto="Programador";

echo $Trabajador->presentacion();

?>