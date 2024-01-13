<?php

    include "config.php";

    session_start();

    if(isset($_SESSION["user"])) {

        include ROOT . "/view/home.php";

    }else {

        include ROOT . "/view/login.php";

    }
