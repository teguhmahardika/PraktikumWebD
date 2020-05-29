<?php
session_start();
include 'koneksi.php';

$NIM = $_POST['NIM'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tmp = $_POST['tmp'];
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$telp = $_POST['telp'];
$Fakultas = $_POST['fakultas'];
$Prodi =  $_POST['prodi'];
$Status = "Verifikasi";

  $data = mysqli_query($koneksi,"UPDATE mahasiswa set nim='$NIM', nama='$nama', jk='$jk', tmp_lahir='$tmp', tgl_lahir='$tgl', alamat='$alamat', agama='$agama', no_telp='$telp', fakultas ='$Fakultas', prodi='$Prodi', Status='$Status' WHERE nim='$NIM'");
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