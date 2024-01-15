<?php

    include "config.php";
    
    session_set_cookie_params(3600, "localhost/PHPLearn/0-Projetos/TimeCounter/", 'localhost', true);

    session_start();

    if(isset($_SESSION["user"])) {

        include ROOT . "/view/home.php";

    }else {

        include ROOT . "/view/login.php";

    }
