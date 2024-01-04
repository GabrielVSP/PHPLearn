<?php

    

    class Login extends DB {

        protected function getUser(String $password, String $email) {

            $sql = $this->connect()->prepare("SELECT password FROM users WHERE email = ?");

            if(!$sql->execute([$email])) {

                $sql = null;
                header("Location: ../index.php?error=fetchfailed");
                die();

            }

            $data = $sql->fetchAll(PDO::FETCH_ASSOC);

            if(count($data) === 0) {

                $sql = null;
                header("Location: ../index.php?error=usernotfound");
                die();

            }

            $checkPass = password_verify($password, $data[0]['password']);

            if(!$checkPass) {

                $sql = null;
                //header("Location: ../index.php?error=wrongpassword");
                header("Location: " . $checkPass);
                die();

            }

            $sql = $this->connect()->prepare("SELECT * FROM users WHERE email = ? AND password = ?");

            //return $data;

            if (!$sql->execute([$email, $data[0]['password']])) {

                $sql = null;
                header("Location: ../index.php?error=loginfailed");
                die();

            }

            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            //return count($data);

            if(count($data) === 0) {

                $sql = null;
                header("Location: ../index.php?error=usernotfound");
                die();

            }

            $user = $sql->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['userID'] = $data[0]['id'];
            $_SESSION['userUID'] = $data[0]['username'];
            
            $sql = null;

        }


    }