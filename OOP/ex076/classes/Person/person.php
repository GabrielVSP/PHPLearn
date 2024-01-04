<?php

namespace Person;

class Person {

    private $name;
    private $role;
    private $age;

    public static $drinkingAge = 18;

    public function __construct($name, $role, $age)
    {
     
        $this->name = $name;
        $this->role = $role;
        $this->age = $age;

    }

    public function getDA()
    {
        return self::$drinkingAge;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public static function setDrinkingAge(int $newAge) {

        self::$drinkingAge = $newAge;

    }

}

