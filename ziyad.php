<?php  

$conn =mysqli_connect('localhost','root','','UNPAS');

$result = mysqli_query($conn,"SELECT * FROM mahasiswa");


$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
};

$mahasiswa = $rows;

var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>gambar</th>
      <th>nrp</th>
      <th>nama</th>
      <th>jurusan</th>
      <th>aksi</th>
    </tr>
    <?php $i = 1; 
        foreach ($mahasiswa as $m): ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?=$m['gambar']; ?>" alt="" width="60px"></td>
      <td><?= $m['nrp'];?></td>
      <td><?= $m['nama']; ?></td>
      <td><?= $m['jurusan']; ?></td>
      <td>aksi</td>
    </tr>
    <?php endforeach;?>
  </table>
</body>

</html>