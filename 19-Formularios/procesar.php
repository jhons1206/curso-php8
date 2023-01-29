<?php

$nombre = $_REQUEST['nombre'];
$edad = $_REQUEST['edad'];
$sexo = $_REQUEST['sexo'];
$educacion = $_REQUEST['educacion'];
$roles = $_REQUEST['roles'];

$imagen = $_FILES['imagen'];
$path = $_SERVER['DOCUMENT_ROOT']. "/curso-php8/19-Formularios/imagenes" . "/" . $imagen['name'];

$mensaje = $_REQUEST['mensaje'];

echo "<p>El nombre del usuario es: <b>$nombre</b> </p>";
echo "<p>Su edad es: <b>$edad</b> años</p>";
echo "<p>El sexo del usuario es: <b>$sexo</b></p>";
echo "<p>Tiene educación: <b>$educacion</b></p>";
echo "<p>Roles del usuario:</p>";

echo "<ul>";
    foreach($roles as $rol) {
        echo "<li><b>$rol</b></li>";
    }
echo "</ul>";

echo "<br><br>";

echo "Mensaje: <br> $mensaje";

// var_dump($imagen);

move_uploaded_file($imagen['tmp_name'], $path);