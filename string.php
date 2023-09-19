<?php
// TIPE DATA STRING
$title = "KELAS PHP SACODE";
$nama_depan ='Chalvin Jemi';
$nama_belakang ='Huby';
$alamat ='Buper Perum polda';
$hoby='Football';

var_dump($title)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPE DATA STRING</title>
</head>
<body>
  <h2><?=$title?>
  <p>Nama saya <?=$nama_depan.' '.$nama_belakang?>,saya tinggal di<?=$alamat?>, hoby saya <?=$hoby?></p>
    </h2>  
</body>
</html>