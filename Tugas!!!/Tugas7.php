<?php

class Person {
    private $name = "";
    private $age = 0;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getInfo() {
        return "Nama: " . $this->name . "\nUmur: " . $this->age;
    }
}

$person1 = new Person("Sarah", 25);
$person1->setName("Sarah");
$person1->setAge(25);
echo $person1->getInfo();
