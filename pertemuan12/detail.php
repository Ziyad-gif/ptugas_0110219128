<?php
require 'functionsa.php';

$id = $_GET['id'];

$m = query("SELECT *from mahasiswa where id = $id");

var_dump("mahasiswa");
?>
!

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail mahasiswa</title>
</head>

<body>
  <h3>detail mahasiswa</h3>
  <ul>
    <li><img src="img/portfolio/<?= $m['gambar']; ?>" alt=""></li>
    <li><?= $m['nrp']; ?></li>
    <li><?= $m['nama']; ?></li>
    <li><?= $m['email']; ?></li>
    <li><?= $m['jurusan']; ?></li>
    <a href="ubah.php?id=<?= $m['id'];?>"> Ubah</a>
    <a href="hapuss.php?id=<?=$m['id']?>" onclick="return confirm('apakah anda yakin');"> Hapus</a>
    <a href="index.php" style="text-decoration: none;">Kembali</a>
  </ul>
</body>

</html>