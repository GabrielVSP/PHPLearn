<?php

    include ROOT . "/model/input.php";

    class InputController extends Input {

        private $cpfPattern = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/';

        private function message($msg, $type) {

            echo "<div class='$type'>$msg</div>";

        }

        public function add($type, $value, $desc, $cpf) {

            if($this->errorHandling($type, (int)$value, $desc, $cpf) !== 'continue') {

                return;

            }

            $regex = preg_replace($this->cpfPattern, '$1.$2.$3-$4', $cpf);

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

        public function deleteData(Int $id) {

            $this->delete($id);

        }

        private function errorHandling(String $type, Int $value, String $desc, String $cpf) {

            if($this->checkCPF($cpf) !== 'continue') {

                $this->message('CPF inválido', 'error');
                return;

            }

            if($this->checkValue($value) !== 'continue') {

                $this->message($this->checkValue($value), 'error');
                return;

            }

            if($this->checkDesc($desc) !== 'continue' ) {

                $this->message($this->checkDesc($desc), 'error');
                return;

            }

            if($this->checkType($type) !== 'continue') {

                $this->message('Invalid type', 'error');
                return;

            }

            return 'continue';

        }

        private function checkCPF(String $cpf) {

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

        private function checkValue(Int $value) {

            if(is_numeric($value)) {

                if($value > 0) {

                    return 'continue';

                }

                return "O valor deve ser maior que 0";

            }

            return "O valor deve ser um número";

        }

        private function checkDesc(String $desc) {

            if(strlen($desc) <= 200) {

                return 'continue';                

            }

            return "A descrição é grande demais.";

        }

        private function checkType(String $type) {

            if($type === 'in' || $type === 'out') {

                return 'continue';

            }

            return 'Tipo inválido.';

        }

    }