<?php

function my_autoloader( $class_name ) {

    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if ( strpos( $url, 'inc' ) !== false ) {
        $path = '../classes/'; 
    } else {
        $path = 'classes/';
    }

    $extension = '.class.php';
    $full_path = $path . $class_name . $extension;
    $full_path = str_replace( '\\', '/', $full_path );
    require_once $full_path;

}

spl_autoload_register('my_autoloader');