<?php

    include ROOT . "/inc/db.php";

    class Login extends DB {

        protected function loginUser(String $email, String $pass) {

            $pdo = $this->connect();
            $sql = $pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
            
            if($sql->execute([$email, $pass])) {

                $sql = $sql->fetch();

                if(count($sql) > 0) {

                    session_start();

                    $_SESSION['user'] = $email;
                    header("Location: http://localhost/PHPLearn/0-Projetos/TimeCounter/");

                }

            }

        }

        protected function registerUser(String $user,String $email, String $pass) {

            $pdo = $this->connect();
            $sql = $pdo->prepare("INSERT INTO users(id, username, email, password) VALUES (null, ?, ?, ?)");

            if($sql->execute([$user, $email, $pass])) {

                session_start();

                $_SESSION['user'] = $email;
                header("Location: http://localhost/PHPLearn/0-Projetos/TimeCounter/");

            }

        }

    }