<?php

    define('CONTROL', true);
    define('SRC', "http://localhost/cursoDanki/0-Projetos/API-Countries/src");

    $routes = require_once('inc/routes.php');
    require_once('inc/apiConsume.php');

    $curRoute = $_GET['route'] ?? 'home';

    if(!in_array($curRoute, $routes)) {
        $curRoute = '404';
    }

    switch ($curRoute) {

        case 'home':

            require_once('inc/header.php');
            require_once('scripts/home.php');
            require_once('inc/footer.php');

            break;

        case 'country':

            require_once('inc/header.php');
            require_once('scripts/country.php');
            require_once('inc/footer.php');

            break;

        case '404':

            require_once('inc/header.php');
            require_once('scripts/404.php');
            require_once('inc/footer.php');

            break;

    }
