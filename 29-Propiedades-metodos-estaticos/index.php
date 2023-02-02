<?php
// Propiedades y métodos estáticos

use Peruano as GlobalPeruano;

class Humano {

    public static $nombre = "Jhon Sandoval";

    public static function saludar() {
        echo "Hola mundo";
    }

    public function saludoPersonalizado() {
        echo "Hola " . self::$nombre;
    }
}

class Peruano extends Humano {
    public function saludoPeruano() {
        echo "Hola desde Perú, " . parent::$nombre;
    }
}

// Humano::saludar();
// echo Humano::$nombre;

// $humano = new Humano;
// $humano->saludoPersonalizado();

// $humano = new Humano;
// $humano->saludar();

$peruano = new Peruano;
$peruano->saludoPeruano();