<?php

    /**Controller part of MVC, updates data of DB */
    class UsersController extends Users {

        public function addUser(string $first, string $last, string $birth) {

            $this->setUser($first, $last, $birth);

        }

    }