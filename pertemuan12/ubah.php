<?php
require 'functionsa.php';
$id = $_GET['id'];

if(!isset($_GET['id'])){
  header("Location: index.php");
  exit;
}


$m = query("SELECT * FROM  mahasiswa where id = '$id'");
// if(isset($_POST['tambah'])){
//   if( tambah($_POST)>0{
//     echo "data berhasil";
//   }else{
//     echo "gak berhasil";

//   }
// }
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
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
  <h3>Form mahasiswa</h3>

  <form action="" method="post">

    <ul>
      <li>
        <label>
        
          <input type="hidden" name="id" value="<?= $m['id']; ?>">
        </label>

        
          
          <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
        
      
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required value="<?= $m['jurusan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan
          <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>