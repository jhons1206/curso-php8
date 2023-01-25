<?php

// Definir funciones

// 9! = 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 

// Funciones
// Existen 2 tipos de funciones: las que retornan un valor y las que no retornan ninguno

function calcularFactorial($num) {
    $resultado = 1;

    for($i = 1; $i <= $num; $i++) {
        $resultado = $resultado * $i;
    }

    return $resultado;

    // echo "El factorial de $num es: ". $resultado;
}

$n = 9;

$resultado = calcularFactorial($n);

echo "El factorial de $n es: ". $resultado;
