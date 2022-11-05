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

// Creamos un objeto
$Alumno = new persona();
$Alumno2 = new persona();

// LLamamos al método creado en la clase
$Alumno->asignarNombre("Rubén");
$Alumno2->asignarNombre("Juan");

// Imprimimos un valor creado en la clase
// echo $Alumno->nombre; con esto mostramos el nombre tambien

$Alumno->imprimirNombre();
$Alumno2->imprimirNombre();
echo $Alumno->mostrarEdad();

?>