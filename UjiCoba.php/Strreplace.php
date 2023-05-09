<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
   $kalimatString = "Saat ini sudah belajar laravel";
   $cari = "/javascript/";
   $gantikan = "php";

   echo preg_replace($cari, $gantikan, $kalimatString);
   // ini contoh penggunaan 1
   echo preg_replace("/javascript/", "php", "karakter spongebob sudah selesai");
    ?>
</body>

</html>