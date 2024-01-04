<?php

if (isset($_POST['submit'])) {

    $pass = $_POST['password'];
    $email = $_POST['email'];

    include "../classes/db.php";
    include "../classes/login.php";
    include "../classes/loginCtrl.php";

    $controller = new LoginController($pass, $email);
    $controller->login();

    //print_r($controller->login());

    header("Location: ../index.php");

}
