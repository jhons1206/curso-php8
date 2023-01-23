<?php
// Operadores de asignación combinada

// $a++; // Incrementa el valor de la variable en 1
// ++$a; // Incrementa el valor de la variable en 1
// $a--; // Disminuye el valor de la variable en 1
// --$a; // Disminuye el valor de la variable en 1

// $a = 10;

// $b = $a++; // Al valor de $b se le asigna primero el valor de $a = 10, luego de ocurrida la asignación recien se ejecuta el operador de asignación combinada $a++, por lo tanto el valor de $a aumenta en 1 unidad, resultando $a = 11

// $b = ++$a; // Primero aumentamos en 1 unidad el valor de $a y luego lo asignamos a $b

// $b = --$a; // Primero disminuimos en 1 unidad el valor de $a y luego lo asignamos a $b


// echo "El valor de a es: $a <br>";
// echo "El valor de b es: $b <br>";

$a = 10;
$b = 5;

// $a = $a + $b;
// $a += $b; // Almacena la suma
// $a -= $b; // Almacena la resta
// $a *= $b; // Almacena la multiplicación 
// $a /= $b; // Almacena la división 
$a %= $b; // Almacena el módulo 

echo $a;
