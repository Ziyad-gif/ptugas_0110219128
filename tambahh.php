<?php

require 'functions.php';
if(isset($_POST['tambah'])){
  if(tambah($_POST) > 0) {

  echo "<script>
  alert ('bangsat kau');
  window.location.href = 'latihan2.php';
  </script>";
  }else{
    echo "gagal";
  }
}







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
  <form action="" method="post">
    <ul>
      <li>
        <label>
          NAMA
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>

        <label>
          NRP :
          <input type="text" name="nrp" required>
        </label>
      </li>
      <li>
        <label>
          Email
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>

        <label>
          Gambar
          <input type="text" name="gambar" required>
        </label>
    </ul>
    </li>
    <li>
      <button type="submit" name="tambah">Tambah data</button>
    </li>
  </form>
</body>

</html>