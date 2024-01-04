<?php

    $newClass = new class() {

        public function hello() {

            return "Hello, world!";

        }

    };

    echo $newClass->hello();