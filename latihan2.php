<?php 
require 'function.php';

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
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>id</th>
      <th>gambar</th>
      <th>nrp</th>
      <th>nama</th>
      <th>email</th>
      <th>jurusan</th>
    </tr>
    <?php $i = 1; foreach($mahasiswa as $m):?>
    <tr>
      <td><?= $i++;?></td>
      <td><img src="img/portfolio/<?= $m['gambar'];?>" width="60px;"></td>
      <td><?=$m['nrp'] ?></td>
      <td><?=$m['nama']?></td>
      <td><?=$m['email'];?></td>
      <td><?=$m['jurusan'];?></td>


    </tr>



    <?php endforeach; ?>
  </table>
</body>

</html>