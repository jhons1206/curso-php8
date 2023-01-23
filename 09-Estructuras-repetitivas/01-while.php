<?php

// Estructura While

// $i = 1;

// while($i <= 10) {
//     echo "El valor de i es $i <br>";
//     $i++;
// }

// echo "Has salido del bucle";


// Ejemplo:

$base = 5;
$exp = 4;

$resultado = 1;

$i = 1;

// 2 * 2 * 2 * 2 * 2

while($i <= $exp) {
    $resultado = $resultado * $base;
    $i++;
}

echo "El valor de $base elevado a la $exp es: $resultado";