<?php
// Estructura Switch

$a = 5;

switch($a) {
    case '1':
        echo "Lunes <br>";
        break;
    case '2':
        echo "Martes <br>";
        break;
    case '3':
        echo "Miércoles <br>";
        break;
    case '4':
        echo "Jueves <br>";
        break;
    case '5':
        echo "Viernes <br>";
        break;
    case '6':
        echo "Sábado <br>";
        break;
    case '7':
        echo "Domingo <br>";
        break;
    default:
        echo "El valor de la variable a no es un valor válido";
        break;
}