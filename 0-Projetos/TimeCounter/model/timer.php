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

    }