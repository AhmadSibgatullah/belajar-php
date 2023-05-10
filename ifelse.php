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
    $nilai = 78;

    if($nilai >= 75){
        echo "kamu sudah di atas  KKM";
    }else{
        echo "kamu di bawah KKM";
    }

    echo "<br>";

    $waktu = 10;
    if($waktu <= 10) {
        echo "selamat pagi anak-anak";
    }else {
        echo "selamat siang anak-anak";
    }

    // elseif
     

    $nilaiTugas = 8;
    if($nilaiTugas >= 90) {
        echo "selamat, kamu nilainya bagus! (A)";
    }elseif ($nilaitugas >= 85) {
        echo "selamat, nilai kamu cukup bagus! (A-)";
    }elseif ($nilaiTugas >= 80) {
        echo "selamat, kamu nilainya bagus! (B)";
    }elseif ($nilaiTugas >= 75) {
        echo "selamat, kamu nilainya kurang bagus! (C)";
    }else {
        echo "selamat, kamu Remedial";
    }

    //switch
    echo "<br>";

    $hari = "jumat";
    switch ($hari) {
        case 'senin':
            echo "Hari ini adalah senin";
            break;
        case 'selasa':
            echo "Hari ini adalah hari selasa";
            break;
        case 'rabu':
            echo "Hari ini adalag hari rabu";
            break;
        case 'kamis':
            echo "Hari ini adalah hari kamis";
            break;
        case 'jumat':
            echo "Hari ini adalah hari jumat";
            break;
        default:
            echo "Hari weekend libur! jangan gangu!.";
            break;
    }
    
    ?>
</body>

</html>