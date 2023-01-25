<?php

// Ámbito de las variables

// Variable global
$a = 5;
$b = 10;

function test(&$n) {
    $n = $n + 10;
}

test($a);
test($b);

echo $a."<br>";
echo $b;