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
mysqli_query($conn,$query) or die(mysqli_error($conn));
echo mysqli_error($conn);
return mysqli_affected_rows($conn);

}

function hapus($id){
  $conn = koneksi();

  mysqli_query($conn,"DELETE from mahasiswa WHERE id = '$id'")or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function ubah($data){
  $conn = koneksi();


  
  
 $id = $data['id'];
$nama = htmlspecialchars($data['nama']);
$nrp = htmlspecialchars($data['nrp']);
$email = htmlspecialchars($data['email']);
$jurusan = htmlspecialchars($data['jurusan']);
$gambar = htmlspecialchars($data['gambar']);
 
$query = "UPDATE mahasiswa SET
nama = '$nama',
nrp = '$nrp' ,
email = '$email',
jurusan = '$jurusan',
gambar = '$gambar'where id = '$id'";

  // $query = "UPDATE mahasiswa SET
  //             nama = '$nama',
  //             nrp = '$nrp',
  //             email = '$email',
  //             jurusan = '$jurusan',
  //             gambar = '$gambar'
  //           WHERE id = $id";
mysqli_query($conn,$query)or die(mysqli_error($conn));
return mysqli_affected_rows($conn);


}


function cari($keyword){
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa where nama like '%$keyword%' or nrp like '%$keyword%' ";

$result= mysqli_query($conn,$query);
$rows = [];

while($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}

return $rows;

// $conn = koneksi();

//   $query = "SELECT * FROM mahasiswa
//               WHERE 
//             nama LIKE '%$keyword%' OR
//             nrp LIKE '%$keyword%'
//           ";

//   $result = mysqli_query($conn, $query);

//   $rows = [];
//   while ($row = mysqli_fetch_assoc($result)) {
//     $rows[] = $row;
//   }

//   return $rows;
}

function login($data){
  $conn = koneksi();


  $username = htmlspecialchars($data['username']);
$password = htmlspecialchars($data['password']);
  if(query("SELECT * from user where username ='$username' && password ='$password'")){
    $_SESSION['login'] = true;

    header("Location: index.php");
    exit;
    // $_SESSION['login'] = true;
    // header('Location: index.php');
    // exit;
   
  }else{
    return[
      'error'=> true,
      'pesan'=>"username salah"

    ];
    echo "salah";
  }
}