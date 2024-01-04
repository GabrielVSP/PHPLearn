<?php

    class Keys extends DB {

        public function getKey() {

            $pdo = $this->connect();
            $sql = $pdo->prepare("SELECT * FROM encriptKeys");
            $sql->execute();

            if (count($sql->fetchAll()) === 0) {

                $sql = $pdo->prepare("INSERT INTO encriptKeys(enKey) VALUES (?)");
                $sql->execute([sodium_crypto_secretbox_keygen()]);

            }

            $sql = $pdo->query("SELECT * FROM encriptKeys");
            return $sql->fetch();

        }

    }