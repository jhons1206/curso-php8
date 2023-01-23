<?php
    // Constantes
    define('CURSO', 'PHP 8 desde cero');
    define('USUARIO_1', 'Jhon');

    // echo USUARIO_1;

    // A partir de la versión PHP 7 se pueden definir CONSTANTES de tipo Array
    define('ANIMALES', [
        'perro',
        'gato',
        'loro',
        'tortuga',
    ]);

    // echo ANIMALES[2];


    // Verificar si existe o ha sido definida una CONSTANTE
    if(defined('CURSO2')) {
        echo "Si se ha definido la constante";
    }


    // CONSTANTES GLOBALES
    // Son constantes definidas por el lenguaje PHP

    echo "Mi versión de PHP es: ". PHP_VERSION; // Devuelve la versión de PHP
    echo "<br>";
    echo "Mi sistema operativo es: ". PHP_OS; // Devuelve el sistema operativo
    echo "<br>";
    echo PHP_EXTENSION_DIR; // Devuelve la ruta de las extensiones PHP
    echo "<br>";
    echo PHP_SAPI;
    echo "<br>";
    echo __LINE__; // Devuelve el número de linea de ejecución del código
    echo "<br>";
    echo __FILE__; // Devuelve el directorio completo en el cual nos encontramos
?>