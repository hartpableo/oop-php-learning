<?php

function my_autoloader( $class_name ) {
    $path = 'classes/';
    $extension = '.class.php';
    $full_path = $path . $class_name . $extension;
    $full_path = str_replace( '\\', '/', $full_path );
    include_once $full_path;
}

spl_autoload_register('my_autoloader');