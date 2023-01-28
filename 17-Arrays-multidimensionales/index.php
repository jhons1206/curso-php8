<?php
// Arrays Multidimensionales

$data = [
    [
        'nombre' => 'Jhon Sandoval',
        'email' => 'webdeveloper84@gmail.com',
        'celular' => '964174598',
        'direccion' => [
            'pais' => 'Perú',
            'ciudad' => 'Lima'
        ]
    ],

    [
        'nombre' => 'Jeremy Sandoval',
        'email' => 'jsandoval@gmail.com',
        'celular' => '969898989'
    ],

    [
        'nombre' => 'Rosmery Chavez',
        'email' => 'rosmery@gmail.com',
        'celular' => '967845442'
    ]
];

// echo $data[2]['nombre'];

// echo $data[0]['direccion']['pais'];


foreach($data as $item) {
    echo $item['nombre']."<br>";
    echo $item['email']."<br>";
    echo $item['celular']."<br>";

    echo "<hr>";
}