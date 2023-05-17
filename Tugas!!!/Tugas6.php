<?php

class Rectangle {
    private $length = 0;
    private $width;

    public function __construct($length = 0, $width = 0) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }
}

$rectangle1 = new Rectangle(5, 8);
$area = $rectangle1->calculateArea();
echo "Luas persegi panjang adalah $area";