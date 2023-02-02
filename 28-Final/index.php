<?php
// Final (Palabra reservada).

// No permite extender una clase padre a otras instancias (hijas).

class Hogar {

    public $color, $seguridad;

    final public function saludar() {
        echo "Bienvenido a mi hogar";
    }
}

class Departamento extends Hogar {
    public function saludar() {
        echo "Bienvenido a mi Departamento";
    }
}

$departamento = new Departamento;
$departamento->saludar();


