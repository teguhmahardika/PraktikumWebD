<?php
session_start();
include 'koneksi.php';

$NIP = $_POST['NIP'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jabatan = $_POST['jabatan'];
$Status = "Verifikasi";

  $data = mysqli_query($koneksi,"UPDATE dosen set nip='$NIP', nama='$nama', email='$email', jk='$jk', jabatan_terakhir='$jabatan', Status='$Status' WHERE nip='$NIP'");
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