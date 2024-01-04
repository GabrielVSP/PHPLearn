<?php

if(isset($_POST['submit'])) {
    
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $passRepeat = $_POST['passwordRepeat'];
    $email = $_POST['email'];

    include "../classes/db.php";
    include "../classes/signup.php";
    include "../classes/signupCtrl.php";

    $controller = new SignUpController($name, $pass, $passRepeat, $email);

    $controller->signUp();

    header("Location: ../index.php");

}