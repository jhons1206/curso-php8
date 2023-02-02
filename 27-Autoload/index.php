<?php
// Autoload

use Controllers\CourseController;
use Models\Course;

spl_autoload_register( function($clase) {

    $archivo = str_replace("\\", "/", $clase) . ".php";

    if(file_exists($archivo)) {
        require_once $archivo;
    }
});

$course = new Course;
$course->saludar();

echo "<br>";

$course_controller = new CourseController;
$course_controller->saludar();