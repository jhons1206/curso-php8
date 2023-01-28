<?php
// Funciones para arrays

// $array = [1, 2, 3];

// $a = $array[0];
// $b = $array[1];
// $c = $array[2];

// list($a, $b, $c) = $array;

// echo $b;


// $array = range(10, 20);

// var_dump($array);

// echo $array[5];

// echo count($array);


$array = ['Jhon', 'Rosmery', 'Nicol', 'Jeremy'];

unset($array[1]);

if(in_array('Jhon', $array)){
    echo "El valor buscado si se encuentra en el array";
} else {
    echo "El valor buscado no se encuentra en el array";
}