<?php
session_start();
include 'koneksi.php';

$kodeuser = $_POST['KodeUser'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$nama = $_POST['nama'];
$Status = "Verifikasi";
$Otoritas = "Staff";

  $data = mysqli_query($koneksi,"UPDATE user set KodeUser='$kodeuser', Username='$username', Pwd='$pwd', Nama='$nama', Otoritas='$Otoritas', Status='$Status' WHERE KodeUser='$kodeuser'");
  if($data) {
    echo "<script>
    alert ('Berhasil.');
    location.href='edit.php';
  </script>"; 
  }else{
    echo "<script>
      alert ('Gagal.');
      location.href='edit.php';
    </script>"; 
  }

?>