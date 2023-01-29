<?php

$nombre = $_REQUEST['nombre'];
$edad = $_REQUEST['edad'];
$sexo = $_REQUEST['sexo'];
$roles = $_REQUEST['roles'];

$imagen = $_FILES['imagen'];

echo "<p>El nombre del usuario es: <b>$nombre</b> </p>";
echo "<p>Su edad es: <b>$edad</b> años</p>";
echo "<p>El sexo del usuario es: <b>$sexo</b></p>";
echo "<p>Roles del usuario:</p>";

echo "<ul>";
    foreach($roles as $rol) {
        echo "<li><b>$rol</b></li>";
    }
echo "</ul>";

var_dump($imagen);