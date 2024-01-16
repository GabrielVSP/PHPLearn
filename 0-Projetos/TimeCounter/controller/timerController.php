<?php

    include_once ROOT . "/model/timer.php";

    class TimerController extends Timer {

        public function addRegistry($data, $email) {

            $this->add($data, $email);

        }

    }
