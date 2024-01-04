<?php

    class DB {

        protected function connect() {

            try {

                $host = 'localhost';
                $dbname = 'finance';
                $user = 'root';
                $pass = '';

                $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

                return $pdo;

            }catch (PDOException $e) {

                die($e->getMessage());

            }
        }

    }