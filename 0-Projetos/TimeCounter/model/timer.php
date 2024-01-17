<?php


    require_once ROOT . "/inc/db.php";

    class Timer extends DB {

        protected function add($data, $email) {

            $pdo = $this->connect();

            $init = $data->init;
            $end = $data->end;
            $name = $data->name;
            $duration = $data->duration->hours.':'.$data->duration->minutes.':'.$data->duration->seconds;

            $sql = $pdo->prepare("INSERT INTO history(id, user, init, end, name, duration) VALUES (null, ?, ?, ?, ?, ?)");

            $sql->execute([$email, $init, $end, $name, $duration]);
            

        }

        protected function fetch($email) {

            $pdo = $this->connect();

            $sql = $pdo->prepare("SELECT * FROM history WHERE user = ?");

            $sql->execute([$email]);
            $sql = $sql->fetchAll();

            if(count($sql) > 0) {

                return $sql;

            }

        }

    }