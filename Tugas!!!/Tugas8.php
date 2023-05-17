<?php

class Circle {
    public $radius = 0;

    public function __construct($radius = 0) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return ($this->radius * $this->radius * 3.142) / 3.14159;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }
}

$circle1 = new Circle();
$circle1->setRadius(10.2598);
$area = $circle1->calculateArea();
echo "Luas lingkaran adalah $area";
