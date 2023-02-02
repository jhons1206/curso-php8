<?php
// Namespace

use Carpeta1\Humano;
use Carpeta2\Humano as Humano2;

require_once('Carpeta1/Humano.php');
require_once('Carpeta2/Humano.php');

$humano1 = new Humano;
$humano1->saludar();

echo "<br>";

$humano2 = new Humano2;
$humano2->saludar();