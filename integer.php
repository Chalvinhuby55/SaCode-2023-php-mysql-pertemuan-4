<?php
$angka_satu = 50;
$angka_dua = 10;
$angka_tiga = 77;

// Penambahan

$tambah = $angka_satu + $angka_dua + $angka_tiga;


// Pengurangan
$kurang =$angka_satu - $angka_dua;


// Perkalian
$kali = $angka_satu * $angka_dua;


// Pembagian
$bagi = $angka_satu / $angka_dua;

$perhitungan = 1 + 2 * 3;


//var_dump($angka_satu);
//var_dump($angka_dua);
//var_dump($angka_tiga);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPE DATA INTEGER</title>
</head>
<body>

    <p>Penambahan</p>
    <p><?=$tambah?></p>
    <p>Pengurangan</p>
    <p><?=$kurang?></p>
    <p>Perkalian</p>
    <p><?=$kali?></p>
    <P>Pembagian</P>
    <P><?=$bagi?></P>
    <P>Perhitungan</P>
    <P><?=$perhitungan?></P>

</body>
</html>