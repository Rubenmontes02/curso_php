<?php

class persona
{
    public $nombre;
    private $edad;

    // Creamos un constructor y le pasamos los valores que deseemos
    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }


    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy " . $this->nombre, "<br/>";
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

// Creamos un objeto
$Alumno = new persona("Roberto");
// $Alumno->asignarNombre("Rubén");
$Alumno->imprimirNombre();


?>