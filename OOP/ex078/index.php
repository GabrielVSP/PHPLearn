<?php

//Scope resolution: ::

class First {

    const PI = 3.14;

    public static function test() {
        $test = 'Testing';
        return $test;
    }

    public function b(){
        echo 'Test';
    }

}

class Second extends First {

    public static $staticProperty = 'A static property';

    public function anotherTest() {
       
        $this->b();
        echo parent::test();
        echo parent::PI;
        echo self::$staticProperty;
    }

}

$snd = new Second();
$snd->anotherTest();