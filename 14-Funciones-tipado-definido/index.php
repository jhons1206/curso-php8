<?php

declare(strict_types=1);

// Funciones con tipado definido

// Tipos de datos: int, float, string, bool, array, object, null 

function sumarEnteros(int $num1, int $num2): int | float {
    return ($num1 + $num2)/2;
}

$resultado = sumarEnteros(2, 5);

echo $resultado;