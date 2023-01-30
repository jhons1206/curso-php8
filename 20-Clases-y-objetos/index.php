<?php
// Clases y Objetos

require_once('clases/Persona.php');

$persona1 = new Persona("RoBeRtH JhOn", "Sandoval", 18);

$persona1->setNombre("JhOn");
// $persona1->apellido = "Sandoval";
// $persona1->edad = 38;


$persona2 = new Persona("RoSmErY", "Chávez", 15);

$persona2->setNombre("RoMy");
// $persona2->apellido = "Chávez";
// $persona2->edad = 40;

echo "El nombre de la persona 1 es: ". $persona1->getNombre();
echo "<br>";
echo "El nombre de la persona 2 es: ". $persona2->getNombre();


// var_dump($persona2);


