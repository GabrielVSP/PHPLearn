<?php

    require_once "../config.php";
    require_once "../controller/inputController.php";

    $contr = new InputController();
     $contr->deleteData($_REQUEST['id']);

   echo $_REQUEST['id'];
