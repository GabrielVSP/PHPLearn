<?php

    session_start();

    include "../config.php";
    include "../controller/timerController.php";

    $timer = new TimerController();

    $data = json_decode($_REQUEST['data'])[0];

    $timer->addRegistry($data, $_SESSION["user"][0]);

    //echo $data->init;