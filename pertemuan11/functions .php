!
<?php

function koneksi(){
  
   return  mysqli_connect("localhost","root","","UNPAS");

}
function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1){
    return mysqli_fetch_assoc($result);
  }
$rows= [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;

  }
  return $rows;
}


function tambah($data){
$conn = koneksi();

$nama = htmlspecialchars($data['nama']);
$nrp = htmlspecialchars($data['nrp']);
$email = htmlspecialchars($data['email']);
$jurusan = htmlspecialchars($data['jurusan']);
$gambar = htmlspecialchars($data['gambar']);


$query = "INSERT INTO mahasiswa VALUES(null,'$nama','$nrp','$email','$jurusan','$gambar');";
// $query = "INSERT INTO
//               mahasiswa
//             VALUES
//             (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
//           ";
mysqli_query($conn,$query)or die mysqli_error($conn);
echo mysqli_error($conn);
return mysqli_affected_rows($conn);

}

function hapus($id){
  $conn = koneksi();

  mysqli_query($conn,"DELETE from mahasiswa WHERE id = '$id'")or die(mysqli_error($conn));
}

function ubah($data){
  
}