<?php

class Car {
    private $brand;
    private $year;

    public function __construct($brand = null, $year = null) {
        if (!empty($brand)) {
            $this->brand = $brand;
        }
        if (!empty($year)) {
            $this->year = $year;
        }
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }

    public function getInfo() {
        return "Make: " . $this->brand . "\nModel: " . $this->year;
    }

}

$car1 = new Car("Toyota", 2020);
$car1->setBrand("Toyota");
$car1->setYear(2020);

echo $car1->getInfo();

