<?php

    include ROOT . "/model/input.php";

    class InputController extends Input {

        private $cpfPattern = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/';

        private function message($msg, $type) {

            echo "<div class='$type'>$msg</div>";

        }

        public function add($type, $value, $desc, $cpf) {

            //$pattern = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/';
            $regex = preg_replace($this->cpfPattern, '$1.$2.$3-$4', $cpf);

            if($this->checkCPF($cpf) != 'continue') {

                $this->message('CPF inválido', 'error');
                return;

            }

            $this->addBought($type, (int)$value, $desc, $regex);

        }

        public function getSum($type) {

           return $this->sumValues($type);

        }

        public function fetch() {

            return $this->fetchList();

        }

        public function decypher(String $data) {

            $key = $this->getKey()[0];
            $input = sodium_hex2bin($data);

            $nonce = substr($input, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
            $cypher = substr($input, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

            return sodium_crypto_secretbox_open($cypher, $nonce, $key);

        }

        public function checkCPF(String $cpf) {

            if (strlen($cpf) === 11 || strlen($cpf) === 14) {

                if(!preg_match('~[a-zA-Z]+~', $cpf)) {

                    if(preg_match('/^([0-9]{3}).([0-9]{3}).([0-9]{3})-([0-9]{2})$/', $cpf) || preg_match("/^[0-9]+$/", $cpf) ) {

                        return 'continue';

                    }

                }

                return "Letras não são permitidas no CPF";

            }

            return "O formato do CPf está incorreto";

        }

    }