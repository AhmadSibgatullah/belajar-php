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
   // json encode
   $kelas = array(
    'X' => 'Kelas X',
    'Xi' => 'Kelas Xi',
    'Xii' => 'Kelas Xii',
   );

   echo json_encode($kelas['X']);

   echo "<br>";

   foreach ($kelas as $array) {
    echo $array . "<br>";
   }

   echo "<br>";

   $kelasDecode = '{"X" : 1, "Xi" : 2, "Xii" : 3}';

  $object = json_decode($kelasDecode);
  print $object-> {'X'};

   ?>
</body>

</html>