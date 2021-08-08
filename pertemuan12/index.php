<?php 

session_start();
if(!isset($_SESSION['login'])){

header("Location : login.php");
exit;     
}


// require 'function.php';
// require 'functions.php';
require 'functionsa.php';

$mahasiswa = query("SELECT  * FROM mahasiswa");

// ketika tombol cari diketik

if(isset($_POST['cari'])){
  $mahasiswa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>
<form action="" method="post">
  <!-- <input type="text" name="keyword" id="keyword" size="40" placeholder="masukan pencarian" autoconplete="off" autofocus>
  <button type="submit" name="cari">Cari</button> -->

  <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
  <button type="submit" name="cari">Cari!</button>
</form>

<body>
  <a href="tambah.php">Tambah data mahasiswa</a>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>id</th>
      <th>gambar</th>
      <th>nama</th>
      <th>Aksi</th>
    </tr>
    <?php if(empty($mahasiswa)): ?>

    <tr>
      <td colspan="4" style="font-style: italic; background-color: red;">data tidak ditemukan</td>
    </tr>
    <?php endif; ?>
    <?php $i = 1; foreach($mahasiswa as $m):?>
    <tr>
      <td><?= $i++;?></td>
      <td><img src="img/portfolio/<?= $m['gambar'];?>" width="60px;"></td>
      <td><?=$m['nama']?></td>

      <td>
        <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
      </td>



    </tr>



    <?php endforeach; ?>
  </table>
</body>

</html>