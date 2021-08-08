<?php
require 'functionsa.php';

$id = $_GET['id'];

if(!isset($_GET[id])){
  header("Location:index.php");
  exit;
}

if(hapus($id)>0){
  echo "<script>
  alert('sudah berhasil');
  document.location.href = 'index.php';
  
  </script>";

}else{
  echo "<script> 
  document.location.href='index.php';
  </script>
  ";


}
// if (hapus($id) > 0) {
//   echo "<script>
//           alert('data berhasil dihapus');
//           document.location.href = 'index.php';
//        </script>";
// } else {
//   echo "data gagal ditambahkan!";
// }


?>