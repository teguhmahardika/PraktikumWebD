<?php
session_start();
include 'koneksi.php';

$NIP = $_POST['NIP'];
$Status = $_POST['Status'];

  $data = mysqli_query($koneksi,"UPDATE dosen set Status='$Status' WHERE nip='$NIP'");
  if($data) {
    echo "<script>
    alert ('Berhasil.');
    location.href='dosen.php';
  </script>"; 
  }else{
    echo "<script>
      alert ('Gagal.');
      location.href='dosen.php';
    </script>"; 
  }

?>