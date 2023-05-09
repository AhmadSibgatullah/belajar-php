<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP </title>
</head>
<body>
    <?php
    // nomor 1
    $karakter = "Saat ini saya sudah mencapai materi php.";
    echo "1. karakter yang diambil : " . substr($karakter, 0, 10);
    // nomor 2 
    echo "\n";
    $soal2 = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr.";
    echo "2. karakter yang diambil : " . substr($soal2, 3, 20);
    
    ?>
</body>
</html>