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
    $stringTunggal = "Syahru, ilham, farhan, alam";
    $explode = explode(",", $stringTunggal);
   print_r($explode); // Menjadi bentuk array dari string tunggal
    ?>
</body>

</html>