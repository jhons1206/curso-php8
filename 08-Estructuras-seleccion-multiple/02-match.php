<?php

$a = 3;

echo match($a) {
    1 => "Lunes",
    2 => "Martes",
    3 => "Miércoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sábado",
    7 => "Domingo",
    default => "El valor de la variable a no es un valor válido"
};