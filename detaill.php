<?php
require 'functions.php';
$id = $_GET['id'];
$m = query("SELECT *from mahasiswa where id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
</head>

<body>
  <h3>detail mahasiswa</h3>

  <ul>
    <li><img src="img/portfolio/<?= $m['gambar']; ?>" alt=""></li>
    <li><?= $m['nrp']; ?></li>
    <li><?= $m['nama']; ?></li>
    <li><?= $m['jurusan']; ?></li>
    <li><?= $m['email']; ?></li>

    <a href="">Ubah | Hapus</a>
    <a href="latihan2.php">Kembali</a>
  </ul>
</body>

</html>