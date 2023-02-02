<?php
// Atributos con nombre

class Humano {

    // public $nombre, $apellido_materno, $apellido_paterno, $dni;

    public function __construct(public $nombre, public $apellido_materno, public $apellido_paterno, public $dni) {
        // $this->nombre = $nombre;
        // $this->apellido_materno = $apellido_materno;
        // $this->apellido_paterno = $apellido_paterno;
        // $this->dni = $dni;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellidos($apellido_paterno, $apellido_materno) {
        $this->apellido_materno = $apellido_materno;
        $this->apellido_paterno = $apellido_paterno;
        return $this;
    }

    public function setDni($dni) {
        $this->dni = $dni;
        return $this;
    }

    public function imprimirDatos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido paterno: " . $this->apellido_paterno . "<br>";
        echo "Apellido materno: " . $this->apellido_materno . "<br>";
        echo "DNI: " . $this->dni . "<br>";
    }
}

$humano = new Humano(nombre:"Jhon", apellido_paterno:"Sandoval", apellido_materno:"Marines", dni:"42445331");
$humano->imprimirDatos();