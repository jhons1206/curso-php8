<?php

// Argumentos variables

function concatenar(...$palabras) {
    
    $resultado = "";

    foreach($palabras as $palabra) {

        $resultado .= $palabra . " ";
    }

    echo $resultado;
}


concatenar('Curso', 'PHP', '8', 'desde', 'cero');