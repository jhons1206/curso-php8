<?php
// Clase Persona

class Persona2 {

    // Propiedades
    public $nombre, $edad;
    public $apellido1, $apellido2;

    // Métodos:

    // Setters
    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    // Getters
    public function getNombre() {
        return ucwords($this->nombre);
    }

    public function setApellidos($apellido1, $apellido2){
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }

    public function getApellidos(){
        return $this->apellido1 . " " . $this->apellido2; 
    }
}

class Peruano extends Persona2 {
    public $departamento, $ciudad;

    public function setApellidos($apellido1, $apellido2){
        // Extender el alcance de un método de la clase padre
        parent::setApellidos($apellido1, $apellido2);

        echo "Los apellidos se asignaron con éxito";
    }
}

class Chileno extends Persona2 {
    public $comuna, $region;

    public function setApellidos($apellido1, $apellido2){
        $this->apellido1 = $apellido2;
        $this->apellido2 = $apellido1;
    }
}