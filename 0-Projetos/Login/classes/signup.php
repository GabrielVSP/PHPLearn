<?php

    class SignUp extends DB {

        protected function setUser(String $user, String $password, String $email) {

            $sql = $this->connect()->prepare("INSERT INTO users (id, username, password, email) VALUES (null, ?, ?, ?)");

            $hash = password_hash($password, CRYPT_BLOWFISH);

            if(!$sql->execute([$user, $hash, $email])) {

                $sql = null;
                header("Location: ../index.php?error=insertionfailed");
                die();

            }

        }

        protected function userExists(String $username, String $email) {

            $sql = $this->connect()->prepare("SELECT username FROM users WHERE username = ? OR email = ?");
            
            if(!$sql->execute([$username, $email])) {

                $sql = null;
                header("Location: ../index.php?error=fetchfailed");
                die();

            }

            $sql = $sql->fetchAll(PDO::FETCH_ASSOC);

            return count($sql) > 0;

        }

    }