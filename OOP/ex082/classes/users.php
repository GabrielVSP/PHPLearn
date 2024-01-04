<?php

    /**Model part of MVC, make connections to DB */

    class Users extends DB {

        /**Get an user by it's id */
        protected function getUser(int $id) {

            $pdo = $this->connect();
            $sql = $pdo->prepare("SELECT * FROM users WHERE id = ?");

            if($sql->execute([$id])) {
                return $sql->fetch();
            }

            return "Failed to fetch data from database";

        }

        protected function setUser(string $first, string $last, string $birth) {

            $pdo = $this->connect();
            $sql = $pdo->prepare("INSERT INTO users(id, firstname, lastname, birth) VALUES (null, ?, ?,?)");

            return $sql->execute([$first, $last, $birth]);

        }

    }