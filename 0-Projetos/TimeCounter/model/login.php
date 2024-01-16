<?php

    require_once ROOT . "/inc/db.php";

    class Login extends DB {

        protected function loginUser(String $email, String $pass) {

            $pdo = $this->connect();
            $sql = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            
            if($sql->execute([$email])) {

                $sql = $sql->fetch();

                if(count($sql) > 0) {

                    if(password_verify($pass, $sql['password'])) {

                        session_start();

                        $_SESSION['user'] = [$email, $sql["username"]];
                        header("Location: http://localhost/PHPLearn/0-Projetos/TimeCounter/");

                    }

                }

            }

        }

        protected function registerUser(String $user,String $email, String $pass) {

            $hash = password_hash($pass, CRYPT_BLOWFISH);

            $pdo = $this->connect();
            $sql = $pdo->prepare("INSERT INTO users(id, username, email, password) VALUES (null, ?, ?, ?)");

            if($sql->execute([$user, $email, $hash])) {

                session_start();

                $_SESSION['user'] = [$email, $user];
                header("Location: http://localhost/PHPLearn/0-Projetos/TimeCounter/");

            }

        }

    }