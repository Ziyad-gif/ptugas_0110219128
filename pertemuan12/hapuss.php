<?php
require 'functionsa.php';
$id = $_GET['id'];

if(hapus($id)>0){
  echo "<script>
  alert('sudah dihapus');
  document.location.href = 'index.php';

  </script>";
}