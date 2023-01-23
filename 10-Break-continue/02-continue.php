<?php

// Continue
// Interrumpe la iteración en un punto(s) específico del bucle y continua con su ejecución
for($i = 1; $i <= 20; $i++) {

    if($i == 7 || $i == 15) {
        continue; // Me lleva a la parte final de bucle
        // die(); // Salir del bucle
        // exit(); // Salir del bucle
    }

    echo $i."<br>";
    
}

echo "Saliste del bucle";