<?php
session_start();
include 'koneksi.php';

$kode = $_POST['kode'];
$kodemk = $_POST['kodemk'];
$jam = $_POST['jam'];
$hari = $_POST['hari'];
$Status = "Tersedia";

  $data = mysqli_query($koneksi,"UPDATE kelas set KodeMK='$kodemk', Jam='$jam', Hari='$hari', Status='$Status' WHERE KodeKelas='$kode'");
  if($data) {
    echo "<script>
    alert ('Berhasil.');
    location.href='jadwal.php';
  </script>"; 
  }else{
    echo "<script>
      alert ('Gagal.');
      location.href='jadwal.php';
    </script>"; 
  }

?>