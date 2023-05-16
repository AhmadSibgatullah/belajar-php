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
 $namaLengkap = "";
 $kelas = '';

 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $namaLengkap = dataType($_POST['namaLengkap']);
    $kelas = dataType($_POST['kelas']);

 }

 function dataType($dataKelas)
 {
    $inputData = trim($dataKelas);
    $inputData = stripslashes($dataKelas);
    $inputData = htmlspecialchars($dataKelas);
    return $inputData;
 }
 ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
       <DIv style="margin-bottom: 3PX;">
       <LABEl for="USERNAME" >USERNAME</LABEl>
       <input type="TEXT" id="USERNAME" name="namaLengkap" placeholder="Masukan nama anda" />

       </DIv>
       <DIv style="margin-bottom: 3PX;">
       <LABEl for="Class" >Class</LABEl>
       <input type="Number" id="Class" name="kelas" placeholder="Masukan Class anda" />

       </DIv>
       <input type="submit" value="Simpan nama">
      
   </form>
   <?php
   echo "<br>";
   echo "Nama Lengkap Saya" . $namaLengkap;
   echo "<br>";
   echo "Kelas Saya" . $kelas;
   ?>
</body>

</html>