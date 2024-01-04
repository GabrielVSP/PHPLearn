<?php

    declare(strict_types = 1);
    spl_autoload_register("load");

    function load($className) {

        $path = "classes/";
        $extension = ".php";
        $full = $path . $className . $extension;

        if(!file_exists($full)) {
            return false;
        }

        require_once $full;

    }
