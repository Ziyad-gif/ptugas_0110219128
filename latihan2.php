<?php 
require 'functions.php';

$mahasiswa = query("SELECT  * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="tambahh.php">tambah</a>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>id</th>
      <th>gambar</th>
      <th>nrp</th>

      <?php $i = 1; foreach($mahasiswa as $m):?>
    <tr>
      <td><?= $i++;?></td>
      <td><img src="img/portfolio/<?= $m['gambar'];?>" width="60px;"></td>
      <td><?=$m['nama']?></td>
      <td>

        <a href="detaill.php?id=<?= $m['id']; ?>">detail</a>
      </td>


    </tr>



    <?php endforeach; ?>
  </table>
</body>

</html>