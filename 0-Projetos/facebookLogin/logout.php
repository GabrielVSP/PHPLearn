<?php

    include('config.php');

    session_destroy();
    /*unset($_SESSION['facebbok_access_token']);
    unset($_SESSION('userData'));*/
    header("Loaction: index.php")

?>