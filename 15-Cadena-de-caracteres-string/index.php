<?php

// Cadena de caracteres o string

// $cadena = "aeioui";

// echo $cadena[1];

// echo mb_strlen($cadena);

// echo strpos($cadena, 'i');

// echo strrpos($cadena, 'i');


// $cadena = "Hola mundo como estás";

// echo str_contains($cadena, 'mundo') ? 'Si se encuentra' : 'No se encuentra';

// echo str_starts_with($cadena, 'mundo') ? 'Si se encuentra' : 'No se encuentra';

// echo str_ends_with($cadena, 'mundo') ? 'Si se encuentra' : 'No se encuentra';


// $cadena1 = "Prueba";
// $cadena2 = "prueba";

// if(strcmp($cadena1, $cadena2) == 0) {
//     echo "Las dos cadenas son iguales";
// } else {
//     echo "Las cadenas con diferentes";
// }

// if(strcasecmp($cadena1, $cadena2) == 0) {
//     echo "Las dos cadenas son iguales";
// } else {
//     echo "Las cadenas con diferentes";
// }


$cadena = "Hola mundo";

// echo substr($cadena, 1, 5);

// echo substr($cadena, -5, 3);

// echo str_replace("mundo", "Jhon", $cadena);

// echo strtolower($cadena);

// echo strtoupper($cadena);

// echo ucfirst($cadena);

echo ucwords($cadena);