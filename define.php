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
    define("fungsi", "ini adalah cetakan hasil fungsi const dari fingsi");
    echo fungsi;

    echo "<br>";

    //define constanta array
    define("arraykelas", ["kelas x", "kelas xi", "kelas xii"]);
    echo "saya adalah" . arraykelas[2];

    echo "<br>";

    //define const function global
    define("global", "Berisikan tentang value gloal function");
    function smk()
    {
       echo name; 
    }
    ?>
</body>

</html>