<?php

    include ROOT .  "/model/login.php";

    class LoginController extends Login {

        public function login(String $email, String $pass) {

            $this->loginUser($email, $pass);

        }

        public function register(String $user,String $email, String $pass, String $passR) {

            $this->registerUser($user, $email, $pass);

        }

    }