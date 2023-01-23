<?php

// Bucle forEach
// Se usa mayormente con Arrays

$nombres = ['Victor', 'Iris', 'Elizabeth', 'Jhon'];

foreach($nombres as $indice => $nombre) {
    echo $nombre." se encuentra en el indice $indice <br>";
}