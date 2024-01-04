<?php

    class LoginController extends Login {

        private $pass;
        private $email;

        public function __construct(String $pass, String $email) {
            $this->pass = $pass;
            $this->email = $email;
        }

        public function login() {

            if(!$this->emptyInput()) {

                header("Location: ../index.php?error=emptyinputs");
                die();

            }else if (!$this->isEmailValid()) {

                header("Location: ../index.php?error=invalidemail");
                die();

            }

           $this->getUser($this->pass, $this->email);

        }

        private function emptyInput() {

            $data = [$this->pass, $this->email];

            foreach($data as $key => $value) {

                if(empty($value)) {
                    return false;
                }

            }

            return true;

        }

        private function isEmailValid() {

            return filter_var($this->email, FILTER_VALIDATE_EMAIL);

        }





    }