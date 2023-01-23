<?php

// Bucle For

$base = 5;
$exp = 4;

$resultado = 1;

for($i = 0; $i <= $exp; $i++) {
    $resultado = $resultado * $base;
}

// $i = 1;

// 2 * 2 * 2 * 2 * 2

// while($i <= $exp) {
//     $resultado = $resultado * $base;
//     $i++;
// }

// echo "El valor de $base elevado a la $exp es: $resultado";



// Ejemplo:
// Imprimir un arbol
//*
//**
//***

$filas = 10;

for($i = 1; $i <= $filas; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
