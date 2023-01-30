<?php
// Clase Persona

class Persona {

    // Propiedades
    public $nombre, $apellido, $edad;

    // Constructor
    // Es un método que se ejecuta de manera automática al instanciar un objeto de una clase.
    
    public function __construct($nombre, $apellido, $edad)
    {   
        $this->nombre = strtolower($nombre);
        $this->apellido = strtolower($apellido);
        $this->edad = $edad;        
    }

    // Métodos:

    // Setters
    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    // Getters
    public function getNombre() {
        return ucwords($this->nombre);
    }

}