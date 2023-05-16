<?php

class dealerCar
{
    public $nameCar;
    public $capacity;

    function buyCar()
    {
        echo "Mobil tersedia, silahkan beli.";
    }

    function typeCar()
    {
        echo "Tersedia pilihan tipe model.";
    }
}
$buy = new dealerCar();
$buy->buyCar();
echo "<br>";
$buy->nameCar = "Honda Civic 2001";
echo "<br>";
$buy->capacity = 2;
echo "<br>";
echo "Berhasil membeli" . $buy->nameCar . 'Dengan kapasitas' . $buy->capacity;