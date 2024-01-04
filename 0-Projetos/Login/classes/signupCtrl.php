<?php

    class SignUpController extends SignUp {

        private $username;
        private $pass;
        private $passRepeat;
        private $email;

        public function __construct(String $user, String $pass, String $passR, String $email) {
            $this->username = $user;
            $this->pass = $pass;
            $this->passRepeat = $passR;
            $this->email = $email;
        }

        public function signUp() {

            if(!$this->emptyInput()) {

                header("Location: ../index.php?error=emptyinputs");
                die();

            }
            if (!$this->isUsernameValid()) {

                header("Location: ../index.php?error=invalidusername");
                die();

            }
            if (!$this->isEmailValid()) {

                header("Location: ../index.php?error=invalidemail");
                die();

            }
            if (!$this->passwordMatch()) {

                header("Location: ../index.php?error=passworddoenstmatch");
                die();

            }
            if ($this->checkUser()) {

                header("Location: ../index.php?error=useroremailalreadyexists");
                die();

            }

            $this->setUser($this->username, $this->pass, $this->email);

        }

        private function emptyInput() {

            $data = [$this->username, $this->pass, $this->passRepeat, $this->email];

            foreach($data as $key => $value) {

                if(empty($value)) {
                    return false;
                }

            }

            return true;

        }

        private function isUsernameValid() {

            echo preg_match("/^[a-zA-Z0-9]*$/", $this->username), "CAME FROM isUsernameValid";
            return preg_match("/^[a-zA-Z0-9]*$/", $this->username);

        }

        private function isEmailValid() {

            return filter_var($this->email, FILTER_VALIDATE_EMAIL);

        }

        private function passwordMatch() {

            return $this->pass === $this->passRepeat;

        }

        private function checkUser() {

            return $this->userExists($this->username, $this->email);

        }

    }