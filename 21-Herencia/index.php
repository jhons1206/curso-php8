<?php
// Herencia

require_once('clases/Persona2.php');

// $peruano = new Peruano;
// $peruano->setNombre("Roberth Jhon");

$peruano = new Peruano;

$peruano->setApellidos('Sandoval', 'Marines');

echo "<br>";

var_dump($peruano);

