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
    // nomor 1
    $kalimatString = "Aku sedang berada pada materi string preg_match().";
    $cari = "/preg_match/";
    $gantikan = "preg_replace";

    echo "1. " . preg_replace($cari, $gantikan, $kalimatString);

    // nomor 2
    echo "\n";

    echo "2. " . preg_replace("/javascript/", "php", "Aku telah melalui pembelajaran javascript.");
    ?>
</body>
</html>