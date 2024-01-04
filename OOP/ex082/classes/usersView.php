<?php

    /**View part of MVC, show the data to the client */
    class UsersView extends Users {

        public function showUser(int $id) {

            $res = $this->getUser($id);
            
            foreach($res as $key => $value) {

                echo "$key: " . $value , "<br>";

            }

        }

    }