<?php

    spl_autoload_register('autoloader');

    function autoloader($classname) {

        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        $path = strpos($url, 'inc') !== false ? '../classes/' : 'classes/';

        $extension = '.php';
        $fullPath = $path . $classname . $extension;

        if(!file_exists($fullPath)) {
            return false;
        }

        require_once $fullPath;

    }