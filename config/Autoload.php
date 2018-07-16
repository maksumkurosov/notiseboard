<?php

spl_autoload_register(function ($class_name) {
    $array_paths = array(
        '/controllers/',
        '/config/',
        '/model/'
    );
    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            require_once "$path";
        }
    }
});


